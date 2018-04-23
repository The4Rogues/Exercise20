<?php

/* 
 * 
 *  id as Primary key on SQL are not included in constructor
 * 
 */

class author {
    
    var $id;
    var $name;
    
    function __construct($name) {
        $this->name = $name;
    }

    function get_id() {
        return $this->id;
    }

    function get_name() {
        return $this->name;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_name($name) {
        $this->name = $name;
    }

}
?>