<?php
class Persona{
    private $persona_id;
    private $nombre;
    private $apellido;
    private $cedula;
    private $fecha_nacimiento;
    private $genero;
    private $email;
    function __construct() {

    }
    function getPersona_id() {
        return $this->persona_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getGenero() {
        return $this->genero;
    }

    function getEmail() {
        return $this->email;
    }

    function setPersona_id($perona_id) {
        $this->persona_id = $perona_id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}




