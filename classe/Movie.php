<?php

class Movie {
    
    private $attori;
    private $titolo;
    private $anno;

    public function __construct($_titolo, $_anno){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
    }
    public function setActor($_attori){
        $this->attori = $_attori;
    }
}

?>