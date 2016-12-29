<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * All AJAX functions should go in here
 *
 * CSRF protection has been disabled for this controller in the config file
 */
class Ajax extends Public_Controller {

    private $data = array();

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        $qs = $_SERVER['QUERY_STRING'] ? $_SERVER['QUERY_STRING'] : "";
        parse_str($qs, $temp);
        $this->data = $temp;
    }


    /**
	 * Change session language - user selected
     */
	function set_session_language()
	{
        $language = $this->input->post('language');
        $this->session->language = $language;
        $results['success'] = TRUE;
        echo json_encode($results);
        die();
	}

    public function add_lead_note() {
        $this->load->model("leads_model");

        $insert_id = $this->leads_model->add_note($this->data["id"], $this->data["message"]);

        if ($insert_id > 0) {
            $this->output(array("success" => "true", "message" => "Note added."));
        }

        $this->output(array("success" => "false", "message" => "Problem adding Note."));
    }

    public function edit_lead_stage() {
        $this->load->model("leads_model");

        if ($this->leads_model->edit_stage($this->data["id"], $this->data["stage"])) {
            $this->output(array("success" => "true", "message" => "Stage changed."));
        }

        $this->output(array("success" => "false", "message" => "Problem changing the stage."));
    }

    public function edit_lead_status() {
        $this->load->model("leads_model");

        if ($this->leads_model->edit_status($this->data["id"], $this->data["status"])) {
            $this->output(array("success" => "true", "message" => "Status changed."));
        }

        $this->output(array("success" => "false", "message" => "Problem changing the status."));
    }

    public function edit_lead_sales() {
        $this->load->model("leads_model");

        if ($this->leads_model->edit_sales($this->data["id"], $this->data["sales"], $this->data["collector"])) {
            $this->load->model("users_model");
            $sales = $this->users_model->get_user($this->data["sales"]);
            $collector = $this->users_model->get_user($this->data["collector"]);
            $this->output(array(
                "success" => "true",
                "message" => "Updated Sales and Collector.",
                "data" => array(
                    "sales" => $sales,
                    "collector" => $collector
                )
            ));
        }

        $this->output(array("success" => "false", "message" => "Problem changing the sales and collector."));
    }

    public function add_job_note() {
        $this->load->model("jobs_model");

        $insert_id = $this->jobs_model->add_note($this->data["id"], $this->data["message"]);

        if ($insert_id > 0) {
            $notes = $this->jobs_model->get_job_notes($this->data["id"]);
            $this->output(array(
                "success" => "true",
                "message" => "Note added.",
                "data" => array(
                    "notes" => $notes
                )
            ));
        }

        $this->output(array("success" => "false", "message" => "Problem adding Note."));
    }

    private function output($array) {
        echo json_encode($array);
        die;
    }

}
