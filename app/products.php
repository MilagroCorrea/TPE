<?php

/*imprime por pantalla la lista de productos*/
function showProducts(){
    include 'templates/header.php';

        echo "<ul class='list-group mt-5'>";
        for($i=1;$i<10;$i++){
            echo"<li class='list-group-item'>$i</li>";
            }
        echo "</ul>";

    include 'templates/footer.php';
}