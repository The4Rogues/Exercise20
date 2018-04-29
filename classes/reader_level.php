<?php

/*  This logc is not established !!!!
 * 
 *  id as Primary key on SQL are not included
 * 
 */
class reader_level {
     
    var $id;
    var $early_learner;
    var $beginner_reader;
    var $young_adult;
    var $adult;
    
    function __construct($early_learner, $beginner_reader, $young_adult, $adult) {
        $this->early_learner = $early_learner;
        $this->beginner_reader = $beginner_reader;
        $this->young_adult = $young_adult;
        $this->adult = $adult;
    }

    function get_id() {
        return $this->id;
    }

    function get_early_learner() {
        return $this->early_learner;
    }

    function get_beginner_reader() {
        return $this->beginner_reader;
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

    function set_early_learner($early_learner) {
        $this->early_learner = $early_learner;
    }

    function set_beginner_reader($beginner_reader) {
        $this->beginner_reader = $beginner_reader;
    }

    function set_young_adult($young_adult) {
        $this->young_adult = $young_adult;
    }

    function set_adult($adult) {
        $this->adult = $adult;
    }
    
}
?>

