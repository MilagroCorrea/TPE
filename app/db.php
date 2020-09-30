<?php
/*
Abro conexión a la base de datos.
*/

function conect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_products;charset=utf8', 'root', '');
    return $db;
}

/*
Devuelve todas las tareas de la base de datos.
*/

function  getProducts(){
    //1.Abro la conexión.
    $db=conect();
    //2.Enviar la consulta (2 sub pasos: prepare and execute
    $query= $db->prepare('SELECT * FROM product');
    $query->execute();
    $products = $query->fetchAll(PDO::FETCH_OBJ); //arreglo de prductos.

    //3. Obtengo la respuesta con un fetchAll(porque son muchos).

    return $products;
}