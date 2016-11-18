<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Servers extends Admin_Controller {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();

        // load the language files
        $this->lang->load('servers');
    }


    /**
     * Dashboard
     */
    function index() {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin servers title') );
		
        $data = $this->includes;

        // load views
        $data['content'] = $this->load->view('admin/servers', NULL, TRUE);
        $this->load->view($this->template, $data);
    }

}