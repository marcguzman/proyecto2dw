<?php
    //incluyo otros archivos
include ("conexion.php");

//Obtiene los datos del formulario
$ID = $_GET['id']; 
//Obtiene los datos del formulario
$Nombre = filter_input(INPUT_POST, 'Nombre');
$Carnet = filter_input(INPUT_POST, 'Carnet');
$Email = filter_input(INPUT_POST, 'Email');


    $con = mysqli_connect($host,$user,$pw) or die("Problemas al momento de hacer la conexion");
    mysqli_select_db($con, $db) or  die("Problemas al momento de hacer la conexión");
            
    //Sql para insertar datos
    $sql = "UPDATE  p2_integrantes set Nombre = '" . $Nombre . 
            "' , Carnet = '" . $Carnet . "' , Email = '" . $Carnet .
            "' WHERE ID = " . $ID;
    
    mysqli_query($con,$sql);
    
    echo 'Datos Actualizados satisfactoriamente';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
    </head>
    <body>
    <center>
        <a href="Formulario.php">Regresar al Formulario</a>
    </center>
    </body>
</html>