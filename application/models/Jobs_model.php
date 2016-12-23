<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model {

    /**
     * @vars
     */
    private $jobs_table = "jobs";
    private $years_table = "years";
    private $job_notes_table = "job_notes";


    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
    }


    /**
     * Retrieve all log
     *
     * @return array|null
     */
    function get_active_jobs_summary($id = null) {
        $results = array();
        
        $sql = "
        select j.id as id,
            j.name as name, 
            j.type as type,
            y.year as year,
            200.00 as sales,
            200.00 as collected,
            200.00 as invoiced,
            'Bob Barker' as collector
        from " . $this->jobs_table . " as j
        inner join " . $this->years_table . " as y on j.id = y.job_id
        where y.status = 'active' ";
        
        if (!is_null($id)) {
            // This is where we put the code to limit the jobs by only those
            // with leads that belong to a given employee.
        }
        
        $sql .= "order by y.year, y.start_date asc";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        }

        return $results;
    }
    
    function get_job($id, $year) {
        $results = array();
        
        $sql = "
        select j.id as id,
            j.name as name, 
            j.type as type,
            j.contact_first_name as contact_first_name,
            j.contact_last_name as contact_last_name,
            j.contact_email as contact_email,
            j.physical_address as physical_address,
            j.physical_address_city as physical_address_city,
            j.physical_address_state as physical_address_state,
            j.physical_address_zip as physical_address_zip,
            j.mailing_address as mailing_address,
            j.mailing_address_city as mailing_address_city,
            j.mailing_address_state as mailing_address_state,
            j.mailing_address_zip as mailing_address_zip,
            y.year as year,
            y.status as status,
            y.start_date as start_date,
            y.end_date as end_date
        from " . $this->jobs_table . " as j
        inner join " . $this->years_table . " as y on j.id = y.job_id
        where y.year = '" . $year . "' and j.id = " . $id . "
        order by y.year, y.start_date asc";
        
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            $results = $query->result_array()[0];
            $results["notes"] = $this->get_job_notes($id);
        }

        return $results;
    }
    
    function get_job_notes($id) {
        $results = array();
        
        $sql = "select created, message "
                . "from " . $this->job_notes_table 
                . " where job_id = " . $id
                . " order by created";
        
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        }
        
        return $results;
    }
    
    function deactivate($id, $year) {
        $date = new DateTime();
        $date->setTimestamp(now());
        
        $sql = "update " . $this->years_table . " "
                . "set status = 'inactive', end_date = '" . $date->format("Y-m-d") . "' "
                . "where job_id = " . $id . " and year = '" . $year . "'";
        
        $this->db->query($sql);

        if ($this->db->affected_rows()) {
            return true;
        }
        
        return false;
    }
    
    function activate($id, $year) {
        $date = new DateTime();
        $date->setTimestamp(now());
        
        $sql = "update " . $this->years_table . " "
                . "set status = 'active' ";
                
        if (is_null($this->get_job_start_date($id, $year))) {
            $sql .= ", start_date = '" . $date->format("Y-m-d") . "' ";
        }
        
        $sql .= "where job_id = " . $id . " and year = '" . $year . "'";
        
        $this->db->query($sql);

        if ($this->db->affected_rows()) {
            return true;
        }
        
        return false;
    }
    
    private function get_job_start_date($id, $year) {
        $start_date = null;
        
        $sql = "
        select 
            y.start_date as start_date
        from " . $this->jobs_table . " as j
        inner join " . $this->years_table . " as y on j.id = y.job_id
        where y.year = '" . $year . "' and j.id = " . $id;
        
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            $start_date = $query->result_array()[0]["start_date"];
        }

        return $start_date;
    }
}
