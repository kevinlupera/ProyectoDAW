<?php
require_once 'model/Conexion.php';
require_once 'model/productos/Producto.php';
require_once 'model/ordenes/Orden.php';

class ordenesModel {
    private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
     public function obtenerOrdenesxUsuario($id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM ordenes WHERE usuario_id=".$id."");
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Orden');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
    }
    
    public function deleteOrden($id){
        try{
            $sentencia = $this->db->prepare("DELETE FROM ordenes WHERE orden_id=".$id);
           
            $r=  $sentencia->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
