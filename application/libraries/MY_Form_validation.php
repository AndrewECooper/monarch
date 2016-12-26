<?php

class MY_Form_validation extends CI_Form_validation {

    public function __construct($rules = array()) {
        parent::__construct($rules);
        // $this->CI->lang->load('MY_form_validation');
        $this->set_message("matches_if_exists", "{field} must match {param}.");
        $this->set_message("other_must_be_set", "{field} must have {param} set if type is 'Other'.");
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
    
    public function other_must_be_set($type, $other_field) {
        if ($type == "other") {
            If (!isset($this->_field_data[$other_field]) || empty($this->_field_data[$other_field]["postdata"])) {
                return false;
            }
        }
        
        if ($type != "other" && strlen($this->_field_data[$other_field]["postdata"]) > 0) {
            return false;
        }
        
        return true;
    }
    
    public function placeholder($str) {
        return true;
    }
}

