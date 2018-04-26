<?php

/* The logic is not established yet therefore it may chage
 *
 * id as Primary key on SQL are not included in constructor
 * 
 * 
 */

class accessibility_options {
    
    var $id;
    var $large_print;
    var $braille;
    var $audio_book;  
    
    function __construct($large_print, $braille, $audio_book) {
        $this->large_print = $large_print;
        $this->braille = $braille;
        $this->audio_book = $audio_book;
    }

    function get_id() {
        return $this->id;
    }

    function get_large_print() {
        return $this->large_print;
    }

    function get_braille() {
        return $this->braille;
    }

    function get_audio_book() {
        return $this->audio_book;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_large_print($large_print) {
        $this->large_print = $large_print;
    }

    function set_braille($braille) {
        $this->braille = $braille;
    }

    function set_audio_book($audio_book) {
        $this->audio_book = $audio_book;
    }

}

