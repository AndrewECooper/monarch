<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends MY_Controller {

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
        $data['content'] = $this->load->view('invoices', $data, TRUE);

        $this->load->view($this->template, $data);

    }

    function view($invoice_num) {
        $this->load->model("leads_model");
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );

        $data = $this->includes;

        // load views
        $data["user"] = $this->user;
        $data['content'] = $this->load->view('invoice', $data, TRUE);

        $this->load->view($this->template, $data);
    }

}
