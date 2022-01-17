<?php

    if($_GET){
        $nombre=$_GET['txtNombre']; //Recibir informacion del formulario HTML Metodo GET

        echo "El nombre introducido es: ".$nombre; //Se usa punto (.) para concatenar
    }
   
?>