<?php
class Reportes {
    private $facturas; 
    private $ordenes; 
    private $total; 
    function __construct() {
    }
    function getFacturas() {
        return $this->facturas;
    }

    function getOrdenes() {
        return $this->ordenes;
    }

    function getTotal() {
        return $this->total;
    }

    function setFacturas($facturas) {
        $this->facturas = $facturas;
    }

    function setOrdenes($ordenes) {
        $this->ordenes = $ordenes;
    }

    function setTotal($total) {
        $this->total = $total;
    }



}

