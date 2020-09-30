<?php

require_once 'db.php';

/*imprime por pantalla la lista de productos*/
function showProducts(){
    include 'templates/header.php';

        $products= getProducts();

        echo "<ul class='list-group mt-5'>";
        foreach($products as $product){
            echo"<li class='list-group-item'>$product->name | $product->description | $product->price | $product->stock</li>";
        }
        echo "</ul>";
        
    include 'templates/footer.php';
}