<?php
require_once 'model/usuarios/Persona.php';
class PersonaModel {
private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function registrarPersona(Persona $persona) {
            try{
             $sentencia = $this->db->prepare("insert into persona "
                     ." (nombre, apellido, cedula, fecha_nacimiento, genero, email"
                     . ") values(?,?,?,?,?,?)");
           $r=  $sentencia->execute(array(
                 $persona->getPer_nombres(),
                 $persona->getPer_apellidos(),
                 $persona->getPer_cedula(),
                 $persona->getPer_fecha_nac(),
                 $persona->getPer_email(),
                 $persona->getPer_genero(),
             ));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    public function buscarPersonaxId($id){
        $sentencia = $this->db->prepare("SELECT * FROM persona where " .
                "persona_id=" . $id);
            $sentencia->execute();
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Persona');
            return $resultset[0];
    }
}