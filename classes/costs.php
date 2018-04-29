<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */
namespace costs;

class costs {
    
    private $id;
    private $charges;
    
    public function __construct($charges) {
        $this->charges = $charges;
    }
    
    public function get_id() {
        return $this->id;
    }

    public function get_charges() {
        return $this->charges;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_charges($charges) {
        $this->charges = $charges;
    }

}
?>


