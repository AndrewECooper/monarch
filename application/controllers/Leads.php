<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {

    const ADDED_LEAD = 3001;
    const EDITED_LEAD = 3002;

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();

        $this->load->model("leads_model");
        $this->load->model("users_model");

        // load the language files
        $this->lang->load('dashboard');
    }


    /**
     * Dashboard
     */
    function lead($lead_num) {
        $this->load->helper(array("form", "url"));

        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );

        $this->add_external_js(array("/js/lead_view.js"));

        $data = $this->includes;
        $data["user"] = $this->user;

        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $this->load->library("form_validation");

            $this->form_validation->set_rules("contact_last_name", "Contact Last Name", "required");
            $this->form_validation->set_rules("contact_first_name", "Contact First Name", "required");
            $this->form_validation->set_rules("contact_email", "Contact Email", "required");
            $this->form_validation->set_rules("physical_address", "Physical Address", "required");
            $this->form_validation->set_rules("physical_address_city", "Contact Email", "required");
            $this->form_validation->set_rules("physical_address_state", "Contact Email", "required");
            $this->form_validation->set_rules("physical_address_zip", "Contact Email", "required");

            if ($this->form_validation->run() == true) {
                $post_data = $this->input->post();
                $post_data = $this->set_address_info($post_data);
                $this->leads_model->edit_lead($lead_num, $post_data);

                $this->log_model->create(
                    $data["user"]["id"],
                    self::EDITED_LEAD,
                    $data["user"]["username"] . " edited lead, (" . $lead_num . ").",
                    json_encode($post_data)
                );
            } else {
                $post_data = $this->input->post();
            }
        }

        $lead = $this->leads_model->get_lead($lead_num);
        $salesman = $this->users_model->get_user($lead["sales_id"]);
        $collector = $this->users_model->get_user($lead["collector_id"]);

        $lead["salesman"] = $salesman["first_name"] . " " . $salesman["last_name"];
        $lead["collector"] = $collector["first_name"] . " " . $collector["last_name"];

        $data["lead"] = $lead;

        // General info widget.
        $data["general_info"] = $this->load->view("widgets/leads/general_info", $data, true);

        // Address info widget.
        $data["addresses"] = $this->load->view("widgets/leads/addresses", $data, true);

        // Artwork widget.
        $data["artwork"] = $this->load->view("widgets/leads/artwork", $data, true);

        // Financial widget.
        $data["financial"] = $this->load->view("widgets/leads/financial", $data, true);

        // Notes widget.
        $notes_data["notes"] =  $this->leads_model->get_notes($lead_num);
        $data["notes"] = $this->load->view("widgets/leads/notes", $notes_data, true);

        // Edit Status Dialog.
        $data["edit_status_dialog"] = $this->load->view("widgets/leads/edit_status_dialog", $data, true);

        // Edit Stage Dialog.
        $data["edit_stage_dialog"] = $this->load->view("widgets/leads/edit_stage_dialog", $data, true);

        // Edit Sales and Collector Dialog.
        $sales_collector_data["sales"] = $this->users_model->get_sales();
        $sales_collector_data["collectors"] = $this->users_model->get_collectors();
        $data["edit_sales_collector_dialog"] = $this->load->view(
            "widgets/leads/edit_sales_collector_dialog",
            $sales_collector_data,
            true
        );

        // Lead Heading widget.
        $data["lead_heading"] = $this->load->view("widgets/leads/lead_heading", $data, true);

        $data["lead_num"] = $lead_num;
        $data["menu_artwork"] = "/leads/" . $lead_num . "/artwork";
        $data['content'] = $this->load->view('lead', $data, TRUE);

        $this->load->view($this->template, $data);

    }

    private function set_address_info($data) {
        if (empty($data["mailing_address"]) || $data["mailing_address"] == "None") {
            $data["mailing_address"] = $data["physical_address"];
        }
        if (empty($data["mailing_address_city"]) || $data["mailing_address_city"] == "None") {
            $data["mailing_address_city"] = $data["physical_address_city"];
        }
        if (empty($data["mailing_address_state"]) || $data["mailing_address_state"] == "NA") {
            $data["mailing_address_state"] = $data["physical_address_state"];
        }
        if (empty($data["mailing_address_zip"]) || $data["mailing_address_zip"] == "None") {
            $data["mailing_address_zip"] = $data["physical_address_zip"];
        }
        return $data;
    }

    function add($job_id, $year) {
        $lead_num = $this->leads_model->add_lead($job_id, $year);

        if ($lead_num) {
            $this->lead($lead_num);
        } else {
            $this->load->helper('url');

            $this->session->flashdata("error", "There was an error adding the new Lead");
            redirect("/jobs/" . $job_id . "/" . $year . "/leads");
        }
    }

}
