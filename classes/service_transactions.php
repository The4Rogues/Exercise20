<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */
namespace service_transactions;

class service_transactions {
    private $id;
    private $transaction_date;
    private $amount;
    private $borrower_id;
    private $service_charges_id;
    
    public function __construct($borrower_id, $service_charges_id) {
       
        $this->borrower_id = $borrower_id;        
        $this->service_charges_id = $service_charges_id;
        $this->transaction_date = date('Y-m-d');
    }

    public function get_id() {
        return $this->id;
    }

    public function get_transaction_date() {
        return $this->transaction_date;
    }

    public function get_amount() {
        return $this->amount;
    }

    public function get_borrower_id() {
        return $this->borrower_id;
    }

    public function get_service_charges_id() {
        return $this->service_charges_id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_transaction_date($transaction_date) {
        $this->transaction_date = $transaction_date;
    }

    public function set_amount($amount) {
        $this->amount = $amount;
    }

    public function set_borrower_id($borrower_id) {
        $this->borrower_id = $borrower_id;
    }

    public function set_service_charges_id($service_charges_id) {
        $this->service_charges_id = $service_charges_id;
    }

}
?>
