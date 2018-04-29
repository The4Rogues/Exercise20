<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 *  transaction_date is Time stamp when created
 */
namespace borrowed_transactions;

class borrowed_transactions {
    
    private $id;
    private $borrowed_items_id;
    private $transaction_date;
    private $amount;
    private $costs_id;
    private $librarian_id;
    
    public function __construct($borrowed_items_id, $costs_id, $librarian_id) {       
        $this->borrowed_items_id = $borrowed_items_id;       
        $this->costs_id = $costs_id;
        $this->librarian_id = $librarian_id;    
        $this->transaction_date = date('Y-m-d');
    }
    
    public function get_id() {
        return $this->id;
    }

    public function get_borrowed_items_id() {
        return $this->borrowed_items_id;
    }

    public function get_transaction_date() {
        return $this->transaction_date;
    }

    public function get_amount() {
        return $this->amount;
    }

    public function get_costs_id() {
        return $this->costs_id;
    }

    public function get_librarian_id() {
        return $this->librarian_id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_borrowed_items_id($borrowed_items_id) {
        $this->borrowed_items_id = $borrowed_items_id;
    }

    public function set_transaction_date($transaction_date) {
        $this->transaction_date = $transaction_date;
    }

    public function set_amount($amount) {
        $this->amount = $amount;
    }

    public function set_costs_id($costs_id) {
        $this->costs_id = $costs_id;
    }

    public function set_librarian_id($librarian_id) {
        $this->librarian_id = $librarian_id;
    }

}
?>


