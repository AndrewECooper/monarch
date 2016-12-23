<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends MY_Controller {

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
            $data["jobs"] = $this->jobs_model->get_active_jobs_summary();
        } else {
            $data["jobs"] = $this->jobs_model->get_active_jobs_summary($this->user["id"]);
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
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        
        // load views
        $data["user"] = $this->user;
        $data["job"] = $this->jobs_model->get_job($job_num, $year);
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('job', $data, TRUE);
        
        $this->load->view($this->template, $data);
    }

}

