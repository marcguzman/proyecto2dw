<?php
    //incluyo otros archivos
include ("conexion.php");

//Obtiene los datos del formulario
$Nombe = filter_input(INPUT_POST, 'Nombre');
$Carnet = filter_input(INPUT_POST, 'Carnet');
$Email = filter_input(INPUT_POST, 'Email');

//Valida que los campos no estén en blanco
if (!empty($Nombe) )
{
    $con = mysqli_connect($host,$user,$pw) or die("Problemas al momento de hacer la conexion");
    mysqli_select_db($con, $db) or die("Problemas al momento de hacer la conexión");
            
    //Sql para insertar datos
    $sql = "INSERT INTO p2_integrantes (Nombre,Carnet,Email) VALUES('$Nombe','$Carnet','$Email')";
    mysqli_query($con,$sql);
    echo 'Datos insertados satisfactoriamente';
}
else{
    echo 'El Nombre no puede estar en blanco';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bajas</title>
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
    </head>
    <br>
    <div class="topnav" id="myTopnav">
        <a href="index.php">Menu</a>
        <a href="Formulario.php">Formulario</a>
        <a href="#contact">Contacto</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div> 
     <header>
        <div class="contenedor">
        <h1 class="">Registro de Usuarios</h1>
        <nav class="menu">
        </nav>
    </header>
    <body>
    <center>
        <a href="Formulario.php">Regresar al Formulario</a>
    </center>
    </body>
</html>
