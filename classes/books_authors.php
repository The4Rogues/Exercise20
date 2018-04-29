<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */
namespace books_authors;

class books_authors {
    
    private $id;
    private $author_id;
    private $books_id;
        
    public function __construct($author_id, $books_id) {
        $this->books_id = $books_id;
        $this->author_id = $author_id;
    }
    
    public function get_id() {
        return $this->id;
    }

    public function get_author_id() {
        return $this->author_id;
    }

    public function get_books_id() {
        return $this->books_id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_author_id($author_id) {
        $this->author_id = $author_id;
    }

    public function set_books_id($books_id) {
        $this->books_id = $books_id;
    }

}
?>

