<?php

class MY_Form_validation extends CI_Form_validation {

    public function __construct($rules = array()) {
        parent::__construct($rules);
        // $this->CI->lang->load('MY_form_validation');
        $this->set_message("matches_if_exists", "{field} must match {param}.");
    }

    public function matches_if_exists($str, $field) {
        if (!isset($this->_field_data[$field])) {
            return false;
        }
        
        if ($str !== $this->_field_data[$field]["postdata"]) {
            return false;
        }
        
        return true;
    }
}

