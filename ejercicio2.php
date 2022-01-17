<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Introduzca un nombre:</p>
    <br>
    <form action="ejercicio2.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>
    <input type="submit" value="Enviar"> 
</form>
<br>

<?php

    if($_POST){
        $nombre=$_POST['txtNombre']; //Recibir informacion del formulario HTML Metodo POST

        echo "El nombre introducido es: ".$nombre; //Se usa punto (.) para concatenar
    }
   
?>
</body>
</html>