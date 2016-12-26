<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends MY_Controller {
    const ACTIVATE_JOB = "2001";
    const DEACTIVATE_JOB = "2002";
    const CREATED_NEW_JOB = "2003";
    const EDITED_JOB = "2004";

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
        
        // load the users model
        $this->load->model('users_model');
        $this->load->model("jobs_model");

        // load the language files
        $this->lang->load('dashboard');
    }


    /**
     * Dashboard
     */
    function index() {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        
        if (in_array("view_all_jobs", $this->user["permissions"])) {
            $data["jobs"] = $this->jobs_model->get_jobs_summary();
        } else {
            $data["jobs"] = $this->jobs_model->get_jobs_summary($this->user["id"]);
        }
        
        // load views
        $data["user"] = $this->user;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('jobs', $data, TRUE);
        
        $this->load->view($this->template, $data);
        
    }
    
    function leads($job_num) {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        
        // load views
        $data["user"] = $this->user;
        $data["job_name"] = "Job " . $job_num;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('leads', $data, TRUE);
        
        $this->load->view($this->template, $data);
    }
    
    function job($job_num, $year) {
        $this->load->helper(array("form", "url"));
        
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        $data["user"] = $this->user;
        $post_data = array();
        
        if (is_null($job_num)) {
            $data["job"] = array(
                "name" => "",
                "type" => "",
                "contact_last_name" => "",
                "contact_first_name" => "",
                "contact_email" => "",
                "physical_address" => "",
                "physical_address_city" => "",
                "physical_address_state" => "",
                "physical_address_zip" => "",
                "mailing_address" => "",
                "mailing_address_city" => "",
                "mailing_address_state" => "",
                "mailing_address_zip" => "",
                "year" => "",
                "status" => "active",
                "start_date" => null,
                "end_date" => null,
                "notes" => array()
            );
        } else {
            $data["job"] = $this->jobs_model->get_job($job_num, $year);
        }
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $this->load->library("form_validation");
            
            $this->form_validation->set_rules("name", "Name", "required");
            $this->form_validation->set_rules("contact_last_name", "Contact Last Name", "required");
            $this->form_validation->set_rules("contact_first_name", "Contact First Name", "required");
            $this->form_validation->set_rules("contact_email", "Contact Email", "required");
            $this->form_validation->set_rules("physical_address", "Physical Address", "required");
            $this->form_validation->set_rules("physical_address_city", "Contact Email", "required");
            $this->form_validation->set_rules("physical_address_state", "Contact Email", "required");
            $this->form_validation->set_rules("physical_address_zip", "Contact Email", "required");
            $this->form_validation->set_rules("type_other_note", "Other Note", "placeholder");
            $this->form_validation->set_rules("type", "Type", "required|other_must_be_set[type_other_note]");
            
            if ($this->form_validation->run() == true) {
                $post_data = $this->input->post();
                $post_data = $this->set_address_info($post_data);
                $this->jobs_model->edit_job($job_num, $year, $post_data);
                
                $this->log_model->create(
                    $data["user"]["id"], 
                    self::EDITED_JOB, 
                    $data["user"]["username"] . " edited job, (" . $job_num . ", " . $year . ").",
                    json_encode($post_data)
                );
                
                $data["job"] = $this->jobs_model->get_job($job_num, $year);
            } else {
                $post_data = $this->input->post();
            }
        }
        
        $data["post_data"] = $post_data;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('job', $data, TRUE);
        
        $this->load->view($this->template, $data);
    }
    
    private function set_address_info($data) {
        if (empty($data["mailing_address"])) {
            $data["mailing_address"] = $data["physical_address"];
        }
        if (empty($data["mailing_address_city"])) {
            $data["mailing_address_city"] = $data["physical_address_city"];
        }
        if (empty($data["mailing_address_state"])) {
            $data["mailing_address_state"] = $data["physical_address_state"];
        }
        if (empty($data["mailing_address_zip"])) {
            $data["mailing_address_zip"] = $data["physical_address_zip"];
        }
        return $data;
    }
    
    function add() {
        $data = array(
            "name" => "",
            "type" => "",
            "contact_last_name" => "",
            "contact_first_name" => "",
            "contact_email" => "",
            "physical_address" => "",
            "physical_address_city" => "",
            "physical_address_state" => "",
            "physical_address_zip" => "",
            "mailing_address" => "",
            "mailing_address_city" => "",
            "mailing_address_state" => "",
            "mailing_address_zip" => "",
            "year" => date("Y")
        );
        
        $job = $this->jobs_model->add_job($data);
        
        $this->log_model->create(
            $this->user["id"], 
            self::CREATED_NEW_JOB, 
            "Created new job.",
            $this->user["username"] . " created new job, (" . $job["id"] . ", " . $job["year"] . ")."
        );
        
        $this->job($job["id"], $job["year"]);
    }
    
    function deactivate($job_num, $year) {
        $this->jobs_model->deactivate($job_num, $year);
        $this->log_model->create(
            $this->user["id"], 
            self::DEACTIVATE_JOB, 
            "Deactivated Job.",
            $this->user["username"] . " deactivated Job " . $job_num . " for year " . $year . "."
        );
        $this->job($job_num, $year);
    }
    
    function activate($job_num, $year) {
        $this->jobs_model->activate($job_num, $year);
        $this->log_model->create(
            $this->user["id"], 
            self::ACTIVATE_JOB, 
            "Activated Job.",
            $this->user["username"] . " activated Job " . $job_num . " for year " . $year . "."
        );
        $this->job($job_num, $year);
    }

}

