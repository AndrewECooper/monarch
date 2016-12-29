<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends MY_Controller {

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
        $filter_data = array("filter_text" => "", "filter_type" => "none");

        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $filter_data = $this->input->post();
        }

        $data["logs"] = $this->log_model->get_logs($filter_data);
        $data["filter_data"] = $filter_data;
        $data["user"] = $this->user;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('logs', $data, TRUE);

        $this->load->view($this->template, $data);

    }

}
