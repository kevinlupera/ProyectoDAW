<?php
require_once 'model/Conexion.php';
require_once 'model/productos/Producto.php';
require_once 'model/ordenes/Orden.php';
require_once 'model/facturas/Factura.php';
require_once 'model/facturas/Detalle.php';
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
     public function obtenerOrdenexId($id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM ordenes WHERE orden_id=".$id."");
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Orden');
              return $resultset[0];
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
    public function pagarOrden($idpersona,$fecha, Orden $orden){
        try{
            $sentencia = $this->db->prepare("select * from factura order by factura_id desc limit 1");
            $sentencia->execute();
            $ultimafact=$sentencia->fetchAll(PDO::FETCH_CLASS, 'Factura');
            $facturaId=$ultimafact[0]->getFactura_id()+1;
            
            $sentencia1 = $this->db->prepare("insert into factura(factura_id,persona_id,fecha) values(?,?,?)");
            $r1=  $sentencia1->execute(array(
                $facturaId,
                $idpersona,
                $fecha));
            
            $dettale_id=1;
            $sentencia2 = $this->db->prepare("insert into detalle(detalle_id,factura_id,id_producto,cantidad,precio) values(?,?,?,?,?)");
            $r2=  $sentencia2->execute(array(
                $dettale_id,
                $facturaId,
                $orden->getProducto_id(),
                $orden->getCantidad(),
                $orden->getPrecio()));
            return $r2;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
