<?php

function conectarDb(){
    $db = mysqli_connect('localhost', 'root', 'root', 'intento');
    if($db){
        echo "Si";
    }  else {
        echo "no";
}
}
?>