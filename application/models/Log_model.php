<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

    /**
     * @vars
     */
    private $_db;


    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        // define primary table
        $this->_db = 'logs';
    }


    /**
     * Retrieve all log
     *
     * @return array|null
     */
    function get_logs()
    {
        $results = NULL;
        
        $sql = "
        SELECT u.first_name as first_name, 
            u.last_name as last_name, 
            u.username as username, 
            l.code as code, 
            l.short_description as short_description, 
            l.description as description, 
            l.created as created 
        FROM " .$this->_db . " as l
        inner join users as u on u.id = l.user_id
        order by l.created desc";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        } else {
            $results = array();
        }

        return $results;
    }


    /**
     * Creates a log entry.
     * 
     * @param integer $user_id
     * @param integer $code
     * @param string $short_desc
     * @param string $desc
     * @return boolean
     */
    function create($user_id, $code, $short_desc, $desc) {
        $sql = "insert into " . $this->_db;
        $sql .= " (user_id, code, short_description, description) values (";
        $sql .= $user_id . ", ";
        $sql .= $code . ", ";
        $sql .= "'" . $short_desc . "', ";
        $sql .= "'" . $desc . "')";
        
        $this->db->query($sql);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        
        return FALSE;
    }

}
