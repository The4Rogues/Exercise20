<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 */

class service_transactions {
    var $id;
    var $transaction_date;
    var $amount;
    var $borrower_id;
    var $service_charges_id;
    
    function __construct($borrower_id, $service_charges_id) {
       
        $this->borrower_id = $borrower_id;        
        $this->service_charges_id = $service_charges_id;
        $this->transaction_date = date('Y-m-d');
    }

    function get_id() {
        return $this->id;
    }

    function get_transaction_date() {
        return $this->transaction_date;
    }

    function get_amount() {
        return $this->amount;
    }

    function get_borrower_id() {
        return $this->borrower_id;
    }

    function get_service_charges_id() {
        return $this->service_charges_id;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_transaction_date($transaction_date) {
        $this->transaction_date = $transaction_date;
    }

    function set_amount($amount) {
        $this->amount = $amount;
    }

    function set_borrower_id($borrower_id) {
        $this->borrower_id = $borrower_id;
    }

    function set_service_charges_id($service_charges_id) {
        $this->service_charges_id = $service_charges_id;
    }


}
?>
