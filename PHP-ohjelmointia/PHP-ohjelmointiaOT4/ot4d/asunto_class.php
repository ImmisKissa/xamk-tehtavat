<?php

class Asunto {

    private $hinta;
    private $pinta_ala;

    function __construct() {

    }

    function asetaHinta($hinta) 
    {
        $this->hinta = $hinta;
    }

    function asetaPinta_ala($pinta_ala) 
    {
        $this->pinta_ala = $pinta_ala;
    }

    function laskeNelioHinta() 
    {
        if (!isset($this->hinta)) {
            return "Hintaa ei ole asetettu!";
        }

        if (!isset($this->pinta_ala)) {
            return "Pinta-alaa ei ole asetettu!";
        }

        return $this->hinta / $this->pinta_ala;
    }
}