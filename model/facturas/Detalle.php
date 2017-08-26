<?php


class Detalle {
    private $detalle_id;
    private $factura_id;
    private $id_producto;
    private $cantidad;
    private $precio;
    function __construct() {
        
    }
    function getDetalle_id() {
        return $this->detalle_id;
    }

    function getFactura_id() {
        return $this->factura_id;
    }

    function getId_producto() {
        return $this->id_producto;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setDetalle_id($detalle_id) {
        $this->detalle_id = $detalle_id;
    }

    function setFactura_id($factura_id) {
        $this->factura_id = $factura_id;
    }

    function setId_producto($id_producto) {
        $this->id_producto = $id_producto;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }


}
