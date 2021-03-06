<?php

require_once 'app/products.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET["action"])){
   $action= $_GET['action'];
   
}else{
    $action='listar';
}
$params=explode("/",$action);
// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
//$action = ""; // acción por defecto si no envían, este sería el home.
//
// determina que camino seguir según la acción
switch ($params[0]) {
    case 'listar':
        showProducts();
        break;
    case 'insertar':
        addProduct();
        break;
    case 'borrar':
        $id = $params[1];
        deleteProduct($id);
        break;
    default:
        echo('404 Page not found');
        break;
    }