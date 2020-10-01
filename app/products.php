<?php

require_once 'db.php';

/*imprime por pantalla la lista de productos*/
function showProducts(){
    include 'templates/header.php';
    include 'templates/form_alta.php';

        $products= getProducts();

        echo "<ul class='list-group mt-5'>";
        foreach($products as $product){
            echo"<li class='list-group-item'>$product->product | $product->descripcion | $product->price | $product->stock</li>";
        }
        echo "</ul>";
        
    include 'templates/footer.php';
}


//Insertar un producto en el sistema.

function addProduct(){
    $product=$_POST['product'];
    $price=$_POST['price'];
    $description=$_POST['descripcion'];

    //verifico campos obligatorio.
    if(empty($product) || empty($price)){
        echo '<h2> ERROR! Faltan datos obligatorios. </h2>';
        die();
    }

    //inserto el producto en la DB.
    insertProduct($product,$description,$price);

    header("Location:". BASE_URL);


}