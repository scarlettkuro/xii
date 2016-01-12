<?php

class Post {
	
    private $id;
    private $text;
    
    function __construct($id) {
        return $this->id = $id;
    }
    
    public function getID() {
        return $this->id;
    }
    
    public function getText() {
        return $this->text;
    }
    
    public function setText($text) {
        return $this->text = $text;
    }
}