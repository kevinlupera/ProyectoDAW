<?php
class Conexion{
    //patron de diseño singleton
    private static $conexion = null;
    private function __construct() {
    }
    public static function getConexion(){
        try{
            //si no existe la conexion se crea
            //self hace referencia a la clase conexion
            //Operador de 4 puntos permite acceder a atributos o metodos estaticos
            //$this hace referencia a la instancia de la clase permite acceder a atributos y metodos no estáticos
            if(!isset(self::$conexion)){
                //driver, servidor, nombre de base de datos
                self::$conexion=new PDO("mysql:host=localhost; dbname=tienda","root","");
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion->exec("set character set utf8");
            }
        } catch (Exception $e) {
            echo "linea del error " .$e->getLine();
            echo "</br>";
            echo "archivo " .$e->getFile();
            echo "</br>";
            die("error " .$e->getMessage());
        }
        return self::$conexion;
    }
}

