<?php

/* 
 *  id as Primary key on SQL are not included
 * 
 */
namespace librarian;

include_once ("person.php");
use person\person as person;

class librarian extends person {
       
    private $id;
    private $employee_no;

    
    public function __construct($employee_no, $username, $password, $first_name, $last_name, $email) {
        $this->employee_no = $employee_no;
        $this->username = $username;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_employee_no() {
        return $this->employee_no;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_employee_no($employee_no) {
        $this->employee_no = $employee_no;
    }
    
}
?>

