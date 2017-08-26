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
    
     public function obtenerOrdenesxUsuario($usuario_id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM ordenes"
                     . "where usuario_id=".$usuario_id);
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Orden');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
    }
}
