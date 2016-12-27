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
    
    function get_lead($lead_id) {
        $sql = "
            select l.id as id, 
                l.company_name as company_name,
                l.line_of_business as line_of_business,
                l.sales_id as sales_id,
                l.collector_id as collector_id,
                l.status as status,
                l.stage as stage,
                l.contact_first_name as contact_first_name,
                l.contact_last_name as contact_last_name,
                l.contact_email as contact_email,
                l.physical_address as physical_address,
                l.physical_address_city as physical_address_city,
                l.physical_address_state as physical_address_state,
                l.physical_address_zip as physical_address_zip,
                l.mailing_address as mailing_address,
                l.mailing_address_city as mailing_address_city,
                l.mailing_address_state as mailing_address_state,
                l.mailing_address_zip as mailing_address_zip,
                l.primary_phone as primary_phone,
                l.alternate_phone as alternate_phone
            from leads as l 
            where l.id = " . $lead_id;
        
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array()[0];
        } else {
            $results = array();
        }

        return $results;
    }
    
    function get_notes($lead_id) {
        $sql = "
            select ln.id as id, 
                ln.message as message,
                ln.created as created
            from lead_notes as ln 
            where ln.lead_id = " . $lead_id . " 
            order by ln.created asc";
        
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        } else {
            $results = array();
        }

        return $results;
    }
}
