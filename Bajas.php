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
        <title></title>
    </head>
    <body>
    <center>
        <a href="Formulario.php">Regresar al Formulario</a>
    </center>
    </body>
</html>