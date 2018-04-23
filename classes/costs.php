<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */
class costs {
    
    var $id;
    var $charges;
    
    function __construct($charges) {
        $this->charges = $charges;
    }
    
    function get_id() {
        return $this->id;
    }

    function get_charges() {
        return $this->charges;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_charges($charges) {
        $this->charges = $charges;
    }

}
?>


