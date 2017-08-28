<?php


require_once '../model/Conexion.php';
require_once '../model/usuarios/Usuario.php';
require_once '../model/usuarios/Persona.php';
class VerificarCedula{
    private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function existeCed($ced) {
        try {
            //prepare=uso de sentencias preparadas
            $sentencia = $this->db->prepare("SELECT * FROM persona where " .
                "cedula='" . $ced ."'");
            $sentencia->execute();
            //FETCH_CLASS=para traer los datos asociados a un objeto (OBJETOS DE TIPO USUARIO)
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
            if(isset($resultset[0])&&!empty($resultset[0]))
                return 1;
            return 0;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
$vu=new VerificarCedula();
$ced=$_GET['ced'];
$result= $vu->existeCed($ced);
if($result==1){
    echo "ya existe un usuario con esa cedula";
}

