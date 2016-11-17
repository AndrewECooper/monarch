<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();

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

        // load views
        $data["websites_widget"] = $this->load->view("widgets/websites", $data, true);
        $data["servers_widget"] = $this->load->view("widgets/servers", $data, true);
        $data["failovers_widget"] = $this->load->view("widgets/failovers", $data, true);
        $data["current_events_widget"] = $this->load->view("widgets/current_events", $data, true);
        $data["past_events_widget"] = $this->load->view("widgets/past_events", $data, true);
        $data["current_status_widget"] = $this->load->view("widgets/current_status", $data, true);
        $data['content'] = $this->load->view('admin/dashboard', $data, TRUE);
        
        $this->load->view($this->template, $data);
    }

}
