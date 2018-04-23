<?php

/* 
 * 
 * id as Primary key on SQL are not included
 * Time stamps will be created 
 * 
 */

class borrowed_items {
    
    var $id;
    var $books_id;
    var $borrower_id;
    var $date_out;
    var $date_due;
    var $date_in;
    
    function __construct($books_id, $borrower_id) {
        $this->books_id = $books_id;
        $this->borrower_id = $borrower_id;
        
        $one_wk = strtotime("+1 week");
        $this->date_out = date('Y-m-d');
        $this->date_due = date('Y-m-d', $one_wk);
    }

    function get_id() {
        return $this->id;
    }

    function get_books_id() {
        return $this->books_id;
    }

    function get_borrower_id() {
        return $this->borrower_id;
    }

    function get_date_out() {
        return $this->date_out;
    }

    function get_date_due() {
        return $this->date_due;
    }

    function get_date_in() {
        return $this->date_in;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_books_id($books_id) {
        $this->books_id = $books_id;
    }

    function set_borrower_id($borrower_id) {
        $this->borrower_id = $borrower_id;
    }

    function set_date_out($date_out) {
        $this->date_out = $date_out;
    }

    function set_date_due($date_due) {
        $this->date_due = $date_due;
    }

    function set_date_in($date_in) {
        $this->date_in = $date_in;
    }

}
?>

