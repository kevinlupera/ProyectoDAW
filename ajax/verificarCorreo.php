<?php

require_once '../model/Conexion.php';
require_once '../model/usuarios/Usuario.php';
require_once '../model/usuarios/Persona.php';
class VerificarEmail{
    private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function existeEmail($email) {
        try {
            //prepare=uso de sentencias preparadas
            $sentencia = $this->db->prepare("SELECT * FROM persona where " .
                "email='" . $email ."'");
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

$vu=new VerificarEmail();
$email=$_GET['ema'];
$result= $vu->existeEmail($email);

if($result==1){
    echo "Correo ya registrada, pruebe con otro correo";
}
