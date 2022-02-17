<?php

if ($_POST) { //condicional para evitar error previo a que se ingrese el nombre
    $nombre = $_POST['txtNombre'];  //recibir info de HTML, la recepciona y oculta (no visible en URK) - metodo POST
    $apellido = $_POST['txtApellido'];
    echo "Hola " .$nombre;
    echo "Hola " .$nombre." ".$apellido;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="strConcatenation.php" method="post">  <!-- Envía la info a PHP - metodo POST -->
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>

        Apellido:
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>