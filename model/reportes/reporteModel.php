<?php
require_once 'model/Conexion.php';
class reporteModel {
private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function obtenerTotal() {
        try{
         $sentencia = $this->db->prepare("SELECT SUM(total) as total FROM ordenes");
         $sentencia->execute();
          $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS,"Total");
          return $resultset[0];
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function contarFacturas() {
            try{
            $sentencia = $this->db->prepare("SELECT COUNT(*) as facturas FROM factura");
            $sentencia->execute();
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS,"Facturas");
             return $resultset[0];
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    public function contarOrdenes() {
        try{
         $sentencia = $this->db->prepare("SELECT COUNT(*) as ordenes FROM ordenes");
         $sentencia->execute();
          $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS,"Ordenes");
          return $resultset[0];
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function stockProductos() {
        try{
         $sentencia = $this->db->prepare("SELECT producto_id, pro_descripcion, pro_stock FROM producto");
         $sentencia->execute();
          $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS,"StockProductos");
          return $resultset;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
