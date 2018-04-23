<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 *  All as
 */

class books {
    
    var $id;
    var $isbn;
    var $title;
    var $publisher;
    var $year;
    var $age_restriction;
    var $edition;
    // bool using int
    var $is_lost;
    // bool using int
    var $is_reference;
    // bool using int
    var $is_out_for_repair;
    var $original_price;
    var $accessibility_option_id;
    var $genre_id;
    var $reader_level_id;
    
    function __construct($isbn, $title, $publisher, $year, $age_restriction, $edition, $is_lost, $is_reference, $is_out_for_repair, $original_price, $accessibility_option_id, $genre_id, $reader_level_id) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->age_restriction = $age_restriction;
        $this->edition = $edition;
        $this->is_lost = $is_lost;
        $this->is_reference = $is_reference;
        $this->is_out_for_repair = $is_out_for_repair;
        $this->original_price = $original_price;
        $this->accessibility_option_id = $accessibility_option_id;
        $this->genre_id = $genre_id;
        $this->reader_level_id = $reader_level_id;
    }
  
    function get_id() {
        return $this->id;
    }

    function get_isbn() {
        return $this->isbn;
    }

    function get_title() {
        return $this->title;
    }

    function get_publisher() {
        return $this->publisher;
    }

    function get_year() {
        return $this->year;
    }

    function get_age_restriction() {
        return $this->age_restriction;
    }

    function get_edition() {
        return $this->edition;
    }

    function get_is_lost() {
        return $this->is_lost;
    }

    function get_is_reference() {
        return $this->is_reference;
    }

    function get_is_out_for_repair() {
        return $this->is_out_for_repair;
    }

    function get_original_price() {
        return $this->original_price;
    }

    function get_accessibility_option_id() {
        return $this->accessibility_option_id;
    }

    function get_genre_id() {
        return $this->genre_id;
    }

    function get_reader_level_id() {
        return $this->reader_level_id;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_isbn($isbn) {
        $this->isbn = $isbn;
    }

    function set_title($title) {
        $this->title = $title;
    }

    function set_publisher($publisher) {
        $this->publisher = $publisher;
    }

    function set_year($year) {
        $this->year = $year;
    }

    function set_age_restriction($age_restriction) {
        $this->age_restriction = $age_restriction;
    }

    function set_edition($edition) {
        $this->edition = $edition;
    }

    function set_is_lost($is_lost) {
        $this->is_lost = $is_lost;
    }

    function set_is_reference($is_reference) {
        $this->is_reference = $is_reference;
    }

    function set_is_out_for_repair($is_out_for_repair) {
        $this->is_out_for_repair = $is_out_for_repair;
    }

    function set_original_price($original_price) {
        $this->original_price = $original_price;
    }

    function set_accessibility_option_id($accessibility_option_id) {
        $this->accessibility_option_id = $accessibility_option_id;
    }

    function set_genre_id($genre_id) {
        $this->genre_id = $genre_id;
    }

    function set_reader_level_id($reader_level_id) {
        $this->reader_level_id = $reader_level_id;
    }
    
}
?>


