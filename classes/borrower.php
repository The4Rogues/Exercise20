<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 *  DOB was added
 *  acc_last active is time stamp of logged in
 * 
 */

class borrower {
    
    var $id;
    var $username;
    var $password;
    var $first_name;
    var $last_name;
    var $dob;
    var $address;
    var $tel;
    var $acc_last_active;
    // this can be null
    var $email;
    
    function __construct($username, $password, $first_name, $last_name, $dob, $address, $tel, $acc_last_active, $email='') {
        $this->username = $username;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->dob = $dob;
        $this->address = $address;
        $this->tel = $tel;
        $this->acc_last_active = $acc_last_active;
        $this->email = $email;
    }

    
    function get_id() {
        return $this->id;
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

    function get_dob() {
        return $this->dob;
    }

    function get_address() {
        return $this->address;
    }

    function get_tel() {
        return $this->tel;
    }

    function get_acc_last_active() {
        return $this->acc_last_active;
    }

    function get_email() {
        return $this->email;
    }

    function set_id($id) {
        $this->id = $id;
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

    function set_dob($dob) {
        $this->dob = $dob;
    }

    function set_address($address) {
        $this->address = $address;
    }

    function set_tel($tel) {
        $this->tel = $tel;
    }

    function set_acc_last_active($acc_last_active) {
        $this->acc_last_active = $acc_last_active;
    }

    function set_email($email) {
        $this->email = $email;
    }
    
}

?>
