<?php

/* 
 * 
 * id as Primary key on SQL are not included
 * Time stamps will be created 
 * 
 */
namespace borrowed_items;

class borrowed_items {
    
    private $id;
    private $books_id;
    private $borrower_id;
    private $date_out;
    private $date_due;
    private $date_in;
    
    public function __construct($books_id, $borrower_id) {
        $this->books_id = $books_id;
        $this->borrower_id = $borrower_id;
        
        $one_wk = strtotime("+1 week");
        $this->date_out = date('Y-m-d');
        $this->date_due = date('Y-m-d', $one_wk);
    }

    public function get_id() {
        return $this->id;
    }

    public function get_books_id() {
        return $this->books_id;
    }

    public function get_borrower_id() {
        return $this->borrower_id;
    }

    public function get_date_out() {
        return $this->date_out;
    }

    public function get_date_due() {
        return $this->date_due;
    }

    public function get_date_in() {
        return $this->date_in;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_books_id($books_id) {
        $this->books_id = $books_id;
    }

    public function set_borrower_id($borrower_id) {
        $this->borrower_id = $borrower_id;
    }

    public function set_date_out($date_out) {
        $this->date_out = $date_out;
    }

    public function set_date_due($date_due) {
        $this->date_due = $date_due;
    }

    public function set_date_in($date_in) {
        $this->date_in = $date_in;
    }

}
?>

