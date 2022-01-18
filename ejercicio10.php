<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionales en php</title>
</head>
<body>

<form action="ejercicio10.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular"> 
</form>
<br>
    
<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];
   
    if(($valorA != $valorB) && ($valorA > $valorB)) {

    echo "El valor de A es mayor que el valor de B</br>";

    }

    /*else 

    {

    echo "El valor de A es menor que el valor de B</br>";

    }*/
}
?>

</body>
</html>