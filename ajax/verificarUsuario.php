<?php

require_once '../model/Conexion.php';
require_once '../model/usuarios/Usuario.php';

class VerificarUsuario{
    private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function existeUser($user) {
        try {
            //prepare=uso de sentencias preparadas
            $sentencia = $this->db->prepare("SELECT * FROM usuario where " .
                "usuario='" . $user ."'");
            $sentencia->execute();
            //FETCH_CLASS=para traer los datos asociados a un objeto (OBJETOS DE TIPO USUARIO)
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Usuario');
            if(isset($resultset[0])&&!empty($resultset[0]))
                return 1;
            return 0;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

$vu=new VerificarUsuario();
$user=$_GET['user'];
$result= $vu->existeUser($user);

if($result==1){
   
    echo "Usuario existente, pruebe otro nombre de usuario";
}
