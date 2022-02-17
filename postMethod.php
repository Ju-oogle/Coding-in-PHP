<?php

if ($_POST) { //condicional para evitar error previo a que se ingrese el nombre
    $nombre = $_POST['textNombre'];  //recibir info de HTML, la recepciona y oculta (no visible en URK) - metodo POST
    echo "Hola ".$nombre;
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
    <form action="postMethod.php" method="post">  <!-- Envía la info a PHP - metodo POST -->
        Nombre:
        <br>
        <input type="text" name="textNombre" id="">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>

</html>