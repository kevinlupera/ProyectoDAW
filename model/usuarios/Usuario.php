<?php
class Usuario{
    //put your code here
    private $usuario_id;
    private $usuario;
    private $clave;
    private $persona_id;
    private $usu_estado;
    private $tipo;
   
    function __construct() {
        
    }
    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getPersona_id() {
        return $this->persona_id;
    }

    function getUsu_estado() {
        return $this->usu_estado;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setPersona_id($persona_id) {
        $this->persona_id = $persona_id;
    }

    function setUsu_estado($usu_estado) {
        $this->usu_estado = $usu_estado;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }



}

