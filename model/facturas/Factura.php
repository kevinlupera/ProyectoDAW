<?php

class Factura {
    private $factura_id;
    private $persona_id;
    private $fecha;
    
    function __construct() {
      
    }
    function getFactura_id() {
        return $this->factura_id;
    }

    function getPersona_id() {
        return $this->persona_id;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setFactura_id($factura_id) {
        $this->factura_id = $factura_id;
    }

    function setPersona_id($persona_id) {
        $this->persona_id = $persona_id;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
