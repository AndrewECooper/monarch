<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

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
        $data["user"] = $this->user;

        if (in_array("view_all_jobs", $this->user["permissions"])) {
            $data["jobs"] = $this->jobs_model->get_jobs_summary();
        } else {
            $data["jobs"] = $this->jobs_model->get_jobs_summary($this->user["id"]);
        }

        $data["row_count"] = 0;
        $data['content'] = $this->load->view('dashboard', $data, TRUE);

        $this->load->view($this->template, $data);

    }

}
