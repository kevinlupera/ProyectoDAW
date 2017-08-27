<?php

require_once ('model/Conexion.php');
require_once 'model/usuarios/Usuario.php';
require_once 'model/usuarios/Persona.php';

class UsuarioModel {
    private $db;
    private $usu;
    private $per;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function listar() {
        try {
            //prepare=uso de sentencias preparadas
            $sentencia = $this->db->prepare("select persona.persona_id, nombre"
                    . ", apellido, cedula, fecha_nacimiento, genero,"
                    . "email from persona, usuario where "
                    . "persona.persona_id=usuario.persona_id and usu_estado=1");
            $sentencia->execute();
            //FETCH_CLASS=para traer los datos asociados a un objeto (OBJETOS DE TIPO ACTIVIDAD)
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
             return $resultset;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    function validarUsuario($user, $pass) {
        try {
            //prepare=uso de sentencias preparadas
            $sentencia = $this->db->prepare("SELECT * FROM usuario where " .
                "usuario='" . $user .
                "' and clave='" . $pass . "'");
            $sentencia->execute();
            //FETCH_CLASS=para traer los datos asociados a un objeto (OBJETOS DE TIPO USUARIO)
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Usuario');
            if(isset($resultset[0])&&!empty($resultset[0]))
                return $resultset[0];
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function existeUsuario($user) {
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
    public function obtenerPorId($id) {
        try{
            $persona = new Persona();
            $usuario = new Usuario();
            
            $sentencia = $this->db->prepare("SELECT * FROM persona where " .
                "persona_id=" .$id ."");
            $sentencia->execute();
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
            $persona=$resultset[0];
            $sentencia = $this->db->prepare("select * from usuario "
                    . "where persona_id =".$id . " and usu_estado=1");
            $sentencia->execute();
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Usuario');
            $usuario=$resultset[0];
            $a = array($usuario,$persona);
            return $a;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function registrarUsuario(Usuario $usuario, Persona $persona) {
        try{
            $persona2 = new Persona();
            $usuario2 = new Usuario();
            $sentencia = $this->db->prepare("SELECT * FROM persona where " .
                "cedula=" . $persona->getCedula());
            $sentencia->execute();
            $resultset1 = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
            //
            $sentencia = $this->db->prepare("SELECT * FROM usuario where " .
                "usuario='" . $usuario->getUsuario_id()."'");
            $sentencia->execute();
            $resultset2 = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Usuario');
            if(empty($persona2)&&empty($usuario2)){
                $sentencia = $this->db->prepare("insert into persona "
                    ." (nombre, apellido, cedula, fecha_nacimiento, genero, email"
                    . ") values(?,?,?,?,?,?)");
                    $r=  $sentencia->execute(array(
                    $persona->getNombre(),
                    $persona->getApellido(),
                    $persona->getCedula(),
                    $persona->getFecha_nacimiento(),
                    $persona->getGenero(),
                    $persona->getEmail(),
                ));
                $sentencia = $this->db->prepare("SELECT * FROM tienda.persona where " .
                    "cedula=" . $persona->getCedula());
                $sentencia->execute();
                $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
                $persona2=$resultset[0];
                $sentencia = $this->db->prepare("insert into usuario "
                    ." (usuario, clave, persona_id"
                    . ") values(?,?,?)");
                    $r=  $sentencia->execute(array(
                    $usuario->getUsuario_id(),
                    $usuario->getClave(),
                    $persona2->getPersona_id()
                ));
            }
            else {
                ?>
                <script type="text/javascript"> 
                    alert("Usuario existente") ;
                </script>
                <?php
            }
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function eliminar($id) {
        try{
            $sentencia = $this->db->prepare("update usuario "
                 ." set usu_estado=0 where persona_id =?");
            $r=  $sentencia->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function actualizar(Usuario $usuario, Persona $persona) {
        try{
            
            $sentencia = $this->db->prepare("UPDATE persona "
                ." SET nombre=?,apellido=?,cedula=?,fecha_nacimiento=?, genero=?,email=? WHERE persona.persona_id=?");
            $r=$sentencia->execute(array(
                $persona->getNombre(),
                $persona->getApellido(),
                $persona->getCedula(),
                $persona->getFecha_nacimiento(),
                $persona->getGenero(),
                $persona->getEmail(),
                $persona->getPersona_id()
                ));
            $sentencia2 = $this->db->prepare("update usuario "
                 ." set clave=? where usuario_id=?");
            $sentencia2->execute(array(
                $usuario->getClave(),
                $usuario->getUsuario_id()
            ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function buscarPersona($cedula) {
            $sentencia = $this->db->prepare("SELECT * FROM persona where " .
                "cedula=" . $cedula);
            $sentencia->execute();
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
            return $resultset[0];
    } 

    
}