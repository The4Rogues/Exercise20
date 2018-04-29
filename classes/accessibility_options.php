<?php

/* The logic is not established yet therefore it may chage
 *
 * id as Primary key on SQL are not included in constructor
 * 
 * 
 */

class accessibility_options {
    
    private $id;
    private $large_print;
    private $braille;
    private $audio_book;  
    
    public function __construct($large_print, $braille, $audio_book) {
        $this->large_print = $large_print;
        $this->braille = $braille;
        $this->audio_book = $audio_book;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_large_print() {
        return $this->large_print;
    }

    public function get_braille() {
        return $this->braille;
    }

    public function get_audio_book() {
        return $this->audio_book;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_large_print($large_print) {
        $this->large_print = $large_print;
    }

    public function set_braille($braille) {
        $this->braille = $braille;
    }

    public function set_audio_book($audio_book) {
        $this->audio_book = $audio_book;
    }

}
?>
