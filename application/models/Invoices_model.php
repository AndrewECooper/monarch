<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices_model extends CI_Model {

    /**
     * @vars
     */
    private $invoices_table = "invoices";


    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
    }

    function get_invoice($id) {
        $sql = "select i.id as invoice_id, " .
                "i.lead_id as lead_id, " . 
                "i.amount as amount, " .
                "i.invoice_number as invoice_number, " .
                "i.created as created, " .
                "l.company_name as lead_name, " .
                "l.mailing_address as lead_address, " .
                "l.mailing_address_city as lead_city, " .
                "l.mailing_address_state as lead_state, " .
                "l.mailing_address_zip as lead_zip, " .
                "y.year as year, " .
                "j.name as job_name " .
                "from monarch.invoices as i " .
                "inner join monarch.leads as l on l.id = i.lead_id " .
                "inner join monarch.years as y on y.id = l.job_year_id " .
                "inner join monarch.jobs as j on j.id = y.job_id " .
                "where i.id = " . $id . ";";
        $query = $this->db->query($sql);
        
        if (count($query->result_array()) < 1) {
            return [];
        }
        return $query->result_array()[0];
    }
}
