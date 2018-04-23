<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */


class books_authors {
    
    var $id;
    var $author_id;
    var $books_id;
        
    function __construct($author_id, $books_id) {
        $this->books_id = $books_id;
        $this->author_id = $author_id;
    }
    
    function get_id() {
        return $this->id;
    }

    function get_author_id() {
        return $this->author_id;
    }

    function get_books_id() {
        return $this->books_id;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_author_id($author_id) {
        $this->author_id = $author_id;
    }

    function set_books_id($books_id) {
        $this->books_id = $books_id;
    }

}
?>

