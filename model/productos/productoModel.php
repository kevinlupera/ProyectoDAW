<?php
require_once 'model/Conexion.php';
require_once 'model/productos/Producto.php';


class productoModel {
private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function obtenerProductos() {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.producto");
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Producto');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    public function obtenerProductosxId($id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.producto where producto_id="
                     . $id);
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Producto');
              return $resultset[0];
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
}
