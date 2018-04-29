<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */

class service_charges {
    
    private $id;
    private $service_name;
    private $price;
    
    public function __construct($service_name, $price) {
        $this->service_name = $service_name;
        $this->price = $price;
    }
    public function get_id() {
        return $this->id;
    }

    public function get_service_name() {
        return $this->service_name;
    }

    public function get_price() {
        return $this->price;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_service_name($service_name) {
        $this->service_name = $service_name;
    }

    public function set_price($price) {
        $this->price = $price;
    }    
}

?>
