<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_model extends CI_Model {

    /**
     * @vars
     */
    private $leads_table = "leads";


    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
    }


    function get_leads_summary($job_year_id) {
        $results = NULL;
        
        $sql = "
        select l.id as id, 
            l.company_name as company_name, 
            l.status as status,
            l.contact_first_name as contact_first_name,
            l.contact_last_name as contact_last_name,
            l.primary_phone as primary_phone,
            l.alternate_phone as alternate_phone
        from luckygunner.leads as l 
        where l.job_year_id = " . $job_year_id;

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        } else {
            $results = array();
        }

        return $results;
    }

}
