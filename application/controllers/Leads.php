<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {

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
    function lead($lead_num) {
        // setup page header data
        $this->add_js_theme( "dashboard_i18n.js", TRUE )
            ->set_title( lang('admin dashboard title') );
		
        $data = $this->includes;
        
        // load views
        $data["lead_num"] = $lead_num;
        $data["menu_artwork"] = "/leads/" . $lead_num . "/artwork";
        $data["lead_name"] = "Lead " . $lead_num;
        $data["search_form"] = $this->load->view("widgets/search", $data, true);
        $data['content'] = $this->load->view('lead', $data, TRUE);
        
        $this->load->view($this->template, $data);
        
    }

}

