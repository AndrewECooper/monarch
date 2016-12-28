<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_model extends CI_Model {

    /**
     * @vars
     */
    private $leads_table = "leads";
    private $years_table = "years";
    private $lead_notes_table = "lead_notes";


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

    function edit_lead($lead_id, $data) {
        unset($data["submit"]);
        unset($data["options_status"]);
        unset($data["options_stage"]);
        unset($data["lead-id"]);

        $sql = "
            UPDATE {$this->leads_table}
            SET
        ";

        foreach ($data as $key => $value) {
            $sql .= $key . " = " . $this->db->escape($value) . ", ";
        }

        $sql = substr($sql, 0, strlen($sql) - 2);

        $sql .= "
            WHERE id = " . $this->db->escape($lead_id);

        $this->db->query($sql);

        if ($this->db->affected_rows()) {
            return true;
        }

        return false;
    }

    function add_lead($job_id, $year) {
        $sql = "select id from " . $this->years_table
                . " where job_id = " . $job_id . " and year = '" . $year . "'";
        $query = $this->db->query($sql);
        $job_year_id = $query->result_array()[0]["id"];

        $sql = "insert into " . $this->leads_table . " ("
            . "company_name, line_of_business, contact_first_name, contact_last_name, contact_email, "
            . "physical_address, physical_address_city, physical_address_state, physical_address_zip, "
            . "mailing_address, mailing_address_city, mailing_address_state, mailing_address_zip, "
            . "sales_id, collector_id, status, stage, job_year_id) "
            . "values ("
            . "'New Company', "
            . "'Unknown', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "'', "
            . "1, "
            . "1, "
            . "'New Lead', "
            . "'Invoiced', "
            . $job_year_id . ")";

        $this->db->query($sql);

        if ($lead_id = $this->db->insert_id()) {
            return $lead_id;
        }

        return false;
    }

    function edit_stage($id, $stage) {
        $sql = "update " . $this->leads_table . " set "
            . "stage = " . $this->db->escape($stage) . " "
            . "where id = " . $id;

        $this->db->query($sql);

        if ($this->db->affected_rows()) {
            return true;
        }

        return false;
    }

    function get_notes($lead_id) {
        $sql = "
            select ln.id as id,
                ln.message as message,
                ln.created as created
            from lead_notes as ln
            where ln.lead_id = " . $lead_id . "
            order by ln.created desc";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        } else {
            $results = array();
        }

        return $results;
    }

    function add_note($lead_id, $message) {
        $sql = "insert into " . $this->lead_notes_table
        . " (lead_id, message) "
        . "values (" . $this->db->escape($lead_id) . ", "
        . $this->db->escape($message) . ")";

        $this->db->query($sql);

        if ($note_id = $this->db->insert_id()) {
            return $note_id;
        }

        return 0;
    }
}
