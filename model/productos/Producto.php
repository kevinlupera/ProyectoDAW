<?php

class Producto {
    
    private $producto_id;
    private $pro_nombre;
    private $pro_descripcion;
    private $pro_precio;
    private $pro_img;
    private $pro_stock;
    
    function __construct() {
        
    }

    
    function getProducto_id() {
        return $this->producto_id;
    }

    function getPro_nombre() {
        return $this->pro_nombre;
    }

    function getPro_descripcion() {
        return $this->pro_descripcion;
    }

    function getPro_precio() {
        return $this->pro_precio;
    }

    function setProducto_id($producto_id) {
        $this->producto_id = $producto_id;
    }

    function setPro_nombre($pro_nombre) {
        $this->pro_nombre = $pro_nombre;
    }

    function setPro_descripcion($pro_descripcion) {
        $this->pro_descripcion = $pro_descripcion;
    }

    function setPro_precio($pro_precio) {
        $this->pro_precio = $pro_precio;
    }
    function getPro_img() {
        return $this->pro_img;
    }

    function setPro_img($pro_img) {
        $this->pro_img = $pro_img;
    }

    function getPro_stock() {
        return $this->pro_stock;
    }

    function setPro_stock($pro_stock) {
        $this->pro_stock = $pro_stock;
    }



}
