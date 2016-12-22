<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model {

    /**
     * @vars
     */
    private $jobs_table = "jobs";
    private $years_table = "years";


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
        $results = NULL;
        
        $sql = "
        select j.name as name, 
            j.type as type,
            y.year as year
        from luckygunner.jobs as j
        inner join luckygunner.years as y on j.id = y.job_id
        order by y.year, y.start_date asc";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        } else {
            $results = array();
        }

        return $results;
    }
}
