<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 *  transaction_date is Time stamp when created
 */
class borrowed_transactions {
    
    var $id;
    var $borrowed_items_id;
    var $transaction_date;
    var $amount;
    var $costs_id;
    var $librarian_id;
    
    function __construct($borrowed_items_id, $costs_id, $librarian_id) {       
        $this->borrowed_items_id = $borrowed_items_id;       
        $this->costs_id = $costs_id;
        $this->librarian_id = $librarian_id;    
        $this->transaction_date = date('Y-m-d');
    }
    
    function get_id() {
        return $this->id;
    }

    function get_borrowed_items_id() {
        return $this->borrowed_items_id;
    }

    function get_transaction_date() {
        return $this->transaction_date;
    }

    function get_amount() {
        return $this->amount;
    }

    function get_costs_id() {
        return $this->costs_id;
    }

    function get_librarian_id() {
        return $this->librarian_id;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_borrowed_items_id($borrowed_items_id) {
        $this->borrowed_items_id = $borrowed_items_id;
    }

    function set_transaction_date($transaction_date) {
        $this->transaction_date = $transaction_date;
    }

    function set_amount($amount) {
        $this->amount = $amount;
    }

    function set_costs_id($costs_id) {
        $this->costs_id = $costs_id;
    }

    function set_librarian_id($librarian_id) {
        $this->librarian_id = $librarian_id;
    }

}
?>


