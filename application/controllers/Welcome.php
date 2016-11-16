<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        // load the language file
        $this->lang->load('welcome');
    }


    /**
	 * Default
     */
	function index()
	{
        // setup page header data
        $this->set_title(sprintf(lang('welcome title'), $this->settings->site_name));

        $data = $this->includes;

        // set content data
        if (is_array($this->settings->welcome_message) && array_key_exists($this->session->language, $this->settings->welcome_message)) {
            $welcome_msg = $this->settings->welcome_message[$this->session->language];
        } else {
            $welcome_msg = "We will put some very nice instructional text here.";
        }
        
        $content_data = array(
            'welcome_message' => $welcome_msg
        );

        // load views
        $data['content'] = $this->load->view('welcome', $content_data, TRUE);
		$this->load->view($this->template, $data);
	}

}
