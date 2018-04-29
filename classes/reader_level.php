<?php

/*  This logc is not established !!!!
 * 
 *  id as Primary key on SQL are not included
 * 
 */
namespace reader_level;

class reader_level {
     
    private $id;
    private $early_learner;
    private $beginner_reader;
    private $young_adult;
    private $adult;
    
    public function __construct($early_learner, $beginner_reader, $young_adult, $adult) {
        $this->early_learner = $early_learner;
        $this->beginner_reader = $beginner_reader;
        $this->young_adult = $young_adult;
        $this->adult = $adult;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_early_learner() {
        return $this->early_learner;
    }

    public function get_beginner_reader() {
        return $this->beginner_reader;
    }

    public function get_young_adult() {
        return $this->young_adult;
    }

    public function get_adult() {
        return $this->adult;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_early_learner($early_learner) {
        $this->early_learner = $early_learner;
    }

    public function set_beginner_reader($beginner_reader) {
        $this->beginner_reader = $beginner_reader;
    }

    public function set_young_adult($young_adult) {
        $this->young_adult = $young_adult;
    }

    public function set_adult($adult) {
        $this->adult = $adult;
    }
    
}
?>

