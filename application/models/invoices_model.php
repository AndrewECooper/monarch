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
        $sql = "select id, lead_id, amount, invoice_number, created
                from " . $this->invoices_table . "
                where lead_id = " . $lead_id;
        $query = $this->db->query($sql);
        return $query->result_array()[0];
    }
}
