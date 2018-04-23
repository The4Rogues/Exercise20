<?php

/* The logic is not established yet therefore it may chage
 *
 * id as Primary key on SQL are not included in constructor
 * 
 * 
 */

class accessibility_options {
    
    var $id;
    var $early_leaner;
    var $biginner_reader;
    var $young_adult;
    var $adult;   
    
    function __construct($early_leaner, $biginner_reader, $young_adult, $adult) {
        $this->early_leaner = $early_leaner;
        $this->biginner_reader = $biginner_reader;
        $this->young_adult = $young_adult;
        $this->adult = $adult;
    }

    function get_id() {
        return $this->id;
    }

    function get_early_leaner() {
        return $this->early_leaner;
    }

    function get_biginner_reader() {
        return $this->biginner_reader;
    }

    function get_young_adult() {
        return $this->young_adult;
    }

    function get_adult() {
        return $this->adult;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_early_leaner($early_leaner) {
        $this->early_leaner = $early_leaner;
    }

    function set_biginner_reader($biginner_reader) {
        $this->biginner_reader = $biginner_reader;
    }

    function set_young_adult($young_adult) {
        $this->young_adult = $young_adult;
    }

    function set_adult($adult) {
        $this->adult = $adult;
    }

}

