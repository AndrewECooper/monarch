<?php

class MY_Form_validation extends CI_Form_validation {

    public function __construct($rules = array()) {
        parent::__construct($rules);
        // $this->CI->lang->load('MY_form_validation');
    }

    public function matches_if_exists($str, $field) {
        return isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])
            ? ($str === $this->_field_data[$field]['postdata'])
            : true;
    }
}

