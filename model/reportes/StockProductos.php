<?php
class StockProductos {
    private $producto_id;
    private $pro_descripcion;
    private $pro_stock;
    function __construct() {
        
    }
    function getProducto_id() {
        return $this->producto_id;
    }

    function getPro_descripcion() {
        return $this->pro_descripcion;
    }

    function getPro_stock() {
        return $this->pro_stock;
    }

    function setProducto_id($producto_id) {
        $this->producto_id = $producto_id;
    }

    function setPro_descripcion($pro_descripcion) {
        $this->pro_descripcion = $pro_descripcion;
    }

    function setPro_stock($pro_stock) {
        $this->pro_stock = $pro_stock;
    }


}
