<?php

if ($_GET) {
    $nombre=$_GET['nombre']; //Recibe la info y la muestra a traves de la URL,y en un documento php - metodo GET
    echo "Hello ".$nombre;
}

?>