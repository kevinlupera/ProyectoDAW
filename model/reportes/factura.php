<?php
class Facturas {
    private $facturas; 
    function __construct() {
    }
    function getFacturas() {
        return $this->facturas;
    }

    function setFacturas($facturas) {
        $this->facturas = $facturas;
    }


}

