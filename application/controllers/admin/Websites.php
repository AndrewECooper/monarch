<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Websites extends Admin_Controller {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();

        // load the language files
        $this->lang->load('websites');
    }


    /**
     * Dashboard
     */
    function index() {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin websites title') );
		
        $data = $this->includes;

        // load views
        $data['content'] = $this->load->view('admin/websites', NULL, TRUE);
        $this->load->view($this->template, $data);
    }

}