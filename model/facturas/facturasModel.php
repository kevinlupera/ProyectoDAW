<?php
require_once 'model/Conexion.php';
require_once 'model/facturas/Detalle.php';
require_once 'model/facturas/Factura.php';

class facturasModel {
    private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function obtenerFacturas() {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.factura");
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Factura');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
    }
    
     public function obtenerFacturasxPersona($id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.factura where persona_id=".$id);
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Factura');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
    }
    public function obtenerDetalles($factura_id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.detalle where factura_id=".$factura_id);
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Detalle');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
    }
}
