<?php
/*
Abro conexión a la base de datos.
*/

function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    return $db;
}

/*
Devuelve todas las tareas de la base de datos.
*/

function  getProducts(){ 
    //1.Abro la conexión.
    $db=connect();
    //2.Enviar la consulta (2 sub pasos: prepare and execute
    $query= $db->prepare('SELECT * FROM product');
    $query->execute();
    $products = $query->fetchAll(PDO::FETCH_OBJ); //arreglo de prductos.

    //3. Obtengo la respuesta con un fetchAll(porque son muchos).

    return $products;
}

//Inserta el producto en la base de datos.

function insertProduct($product, $description, $price){

    $db=connect();

    $query= $db->prepare( 'INSERT INTO `product` ( `product`, `descripcion`, `price`) VALUES (?,?,?)');
    $query->execute([$product, $description, $price]);

    //3.Obtengo y devuelvo el id del ultimo produto agregado

    return $db->lastInsertId();

  }

function removeProduct($id){

     //1.Abro la conexión.
     $db=connect();
     //2.Enviar la consulta (2 sub pasos: prepare and execute
     $query= $db->prepare('DELETE FROM `product` WHERE `product`.`id` = ?');
     $query->execute([$id]);
     
 }