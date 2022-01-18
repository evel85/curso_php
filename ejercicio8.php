<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos en php</title>
</head>
<body>

<form action="ejercicio8.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Enviar"> 
</form>
<br>
    
<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
    $suma=$valorA+$valorB;

    echo "El resultado de la operación es: ".$suma;

}
?>

</body>
</html>