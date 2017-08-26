<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Orden
 *
 * @author pierr
 */
class Orden {
    private $orden_id;
    private $producto_id;
    private $usuario_id;
    private $precio;
    private $cantidad;
    private $total;
    private $orden_estado;
    
    function __construct() {
        
    }

    function getOrden_id() {
        return $this->orden_id;
    }

    function getProducto_id() {
        return $this->producto_id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getTotal() {
        return $this->total;
    }

    function getOrden_estado() {
        return $this->orden_estado;
    }

    function setOrden_id($orden_id) {
        $this->orden_id = $orden_id;
    }

    function setProducto_id($producto_id) {
        $this->producto_id = $producto_id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setOrden_estado($orden_estado) {
        $this->orden_estado = $orden_estado;
    }


}
