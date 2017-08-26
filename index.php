<?php
require_once 'model/conexion.php';
session_start();
// controlador inicial
$controller = 'login';

// Todo esta lógica hara el papel de un FrontController
//con REQUEST se Pueden leer los parametros pedidos por GET, POST, COOKIE
if(!isset($_REQUEST['c']))
{//POR DEFECTO, INICIALMENTE
   // $login=$_REQUEST['c'];
    require_once "controller/".$controller."Controller.php";
    //ucwords — Uppercase the first character of each word in a string (hace la 1era letra mayuscula)
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    //controlador y accion inicial
    $controller->consultar();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    //strtolower — Make a string lowercase(Converyit a Minuscula)
    $controller = strtolower($_REQUEST['c']);
    //Operador ternario=> Variable=(Condicion)?en verdadero:en falso
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'consultar';
    
    // Instanciamos el controlador
     require_once "controller/".$controller."Controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
   // call_user_func — Llamar a una llamada de retorno dada por el primer parámetro
    //array(objeto,metodo)
    call_user_func( array( $controller, $accion ));
}
