<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends MY_Controller {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
        
        // load the users model
        $this->load->model('users_model');

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
        
        $data["jobs"] = array(
            array(
                "id" => 1,
                "year" => "2017",
                "name" => "Laredo Border Patrol TX",
                "collector" => "Bob Barker",
                "sales" => "$6,150.00",
                "collected" => "$150.00"
            ),
            array(
                "id" => 1,
                "year" => "2017",
                "name" => "Orangeburg Co, SC",
                "collector" => "Bill Bixby",
                "sales" => "$53,854.00",
                "collected" => "$15,000.00"
            ),
            array(
                "id" => 1,
                "year" => "2017",
                "name" => "Jackson County, GA",
                "collector" => "Bob Barker",
                "sales" => "$28,010.00",
                "collected" => "$150.00"
            ),
            array(
                "id" => 1,
                "year" => "2017",
                "name" => "Liberty County, GA",
                "collector" => "Bob Barker",
                "sales" => "$65,130.00",
                "collected" => "$23,500.00"
            )
        );
        
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
    
    function job($job_num) {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        
        // load views
        $data["user"] = $this->user;
        $data["job_num"] = $job_num;
        $data["job_name"] = "Job " . ($job_num + 1);
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('job', $data, TRUE);
        
        $this->load->view($this->template, $data);
    }

}

