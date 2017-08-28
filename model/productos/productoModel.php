<?php
require_once 'model/Conexion.php';
require_once 'model/productos/Producto.php';
require_once 'model/ordenes/Orden.php';

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
        
    public function insertarProductos(Orden $orden){
       
            try{
             $sentencia = $this->db->prepare("insert into ordenes "
                     ." (producto_id, usuario_id, precio, cantidad, total"
                     . ") values(?,?,?,?,?)");
           $r=  $sentencia->execute(array(
                 $orden->getProducto_id(),
                 $orden->getUsuario_id(),
                 $orden->getPrecio(),
                 $orden->getCantidad(),
                 $orden->getTotal()
                 
             ));
             return $r;
            }catch(Exception $e){
                die($e->getMessage());
            }
            
        
    }
    
     public function disminuirStock($idproducto,$cantidad) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.producto where producto_id=".$idproducto);
             $sentencia->execute();
             $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Producto');
             $producto=$resultset[0];
             $stock=$producto->getPro_stock()-$cantidad;
             
             
            $sentencia2 = $this->db->prepare("update tienda.producto "
                 ." set pro_stock=? where producto_id=?");
            $sentencia2->execute(array(
                $stock,
                $idproducto
                ));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
}
