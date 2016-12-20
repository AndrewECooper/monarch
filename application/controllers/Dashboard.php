<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

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
        
        // load views
        $data["user"] = $this->user;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('dashboard', $data, TRUE);
        
        $this->load->view($this->template, $data);
        
    }

}
