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
    <form action="ejercicio5.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>
    Apellido:
    <input type="text" name="txtApellido" id="">
    <br/>
    <input type="submit" value="Enviar"> 
</form>
<br>

<?php

    //Ejercicio de concatenación de strings

    if($_POST){
        /*Recibir informacion del formulario HTML Metodo POST*/
        $nombre=$_POST['txtNombre']; 
        $apellido=$_POST['txtApellido']; 

        echo "El nombre introducido es: ".$nombre." ".$apellido; //Se usa punto (.) para concatenar
    }
   
?>
</body>
</html>