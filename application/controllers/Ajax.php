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

    private function output($array) {
        echo json_encode($array);
        die;
    }

}
