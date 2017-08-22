<?php
    //incluyo otros archivos
include ("conexion.php");

//Obtiene los datos del formulario
$ID = $_GET['id']; 

    $con = mysqli_connect($host,$user,$pw) or die("Problemas al momento de hacer la conexion");
    mysqli_select_db($con, $db) or  die("Problemas al momento de hacer la conexión");
            
    //Sql para insertar datos
    $sql = "DELETE FROM p2_integrantes WHERE ID = " . $ID;
    
    mysqli_query($con,$sql);
    
    echo 'Datos Eliminados satisfactoriamente';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bajas</title>
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/3dfont.css">
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
        <h1 class="">Bajas</h1>
        <nav class="menu">
        </nav>
    </header>
    <body>
    <section class="color-1">
     <center>
      <nav class="cl-effect-1">
        <a href="Formulario.php">REGRESAR AL FORMULARIO</a>
        
        </nav>
    </center>
    </section>  
    </body>
</html>
