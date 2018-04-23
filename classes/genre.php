<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */

class genre {
     
    var $id;
    var $genre_name;
    
    function __construct($genre_name) {
        $this->genre_name = $genre_name;
    }

    function get_id() {
        return $this->id;
    }

    function get_genre_name() {
        return $this->genre_name;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_genre_name($genre_name) {
        $this->genre_name = $genre_name;
    }
    
}

?>


