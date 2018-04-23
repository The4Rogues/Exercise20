<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */

class service_charge {
    
    var $id;
    var $service_name;
    var $price;
    
    function __construct($service_name, $price) {
        $this->service_name = $service_name;
        $this->price = $price;
    }
    function get_id() {
        return $this->id;
    }

    function get_service_name() {
        return $this->service_name;
    }

    function get_price() {
        return $this->price;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_service_name($service_name) {
        $this->service_name = $service_name;
    }

    function set_price($price) {
        $this->price = $price;
    }    
}

?>
