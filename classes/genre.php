<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */

class genre {
     
    private $id;
    private $genre_name;
    
    public function __construct($genre_name) {
        $this->genre_name = $genre_name;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_genre_name() {
        return $this->genre_name;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_genre_name($genre_name) {
        $this->genre_name = $genre_name;
    }
    
}

?>


