<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */

class librarian {
    
    var $id;
    var $employee_no;
    var $username;
    var $password;
    var $first_name;
    var $last_name;
    var $email;
    
    function __construct($employee_no, $username, $password, $first_name, $last_name, $email) {
        $this->employee_no = $employee_no;
        $this->username = $username;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    function get_id() {
        return $this->id;
    }

    function get_employee_no() {
        return $this->employee_no;
    }

    function get_username() {
        return $this->username;
    }

    function get_password() {
        return $this->password;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function get_last_name() {
        return $this->last_name;
    }

    function get_email() {
        return $this->email;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_employee_no($employee_no) {
        $this->employee_no = $employee_no;
    }

    function set_username($username) {
        $this->username = $username;
    }

    function set_password($password) {
        $this->password = $password;
    }

    function set_first_name($first_name) {
        $this->first_name = $first_name;
    }

    function set_last_name($last_name) {
        $this->last_name = $last_name;
    }

    function set_email($email) {
        $this->email = $email;
    }
    
}
?>

