<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {

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
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        
        $lead = $this->leads_model->get_lead($lead_num);
        $salesman = $this->users_model->get_user($lead["sales_id"]);
        $collector = $this->users_model->get_user($lead["collector_id"]);
        $lead["salesman"] = $salesman["first_name"] . " " . $salesman["last_name"];
        $lead["collector"] = $collector["first_name"] . " " . $collector["last_name"];
        $lead["notes"] = $this->leads_model->get_notes($lead_num);
        
        // load views
        $data["lead_num"] = $lead_num;
        $data["menu_artwork"] = "/leads/" . $lead_num . "/artwork";
        $data["lead"] = $lead;
        $data["user"] = $this->user;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('lead', $data, TRUE);
        
        $this->load->view($this->template, $data);
        
    }

}

