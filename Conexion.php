<?php

//Definir parámetros de conexión

    $host   = "localhost";
    $user   = "root";
    $pw     = "";
    $db     = "Proyecto2";
    

function CONEX()
{
     global $link;
     $link = new mysqli($host, $user, "", $db);
     return $link;
}
function alta ($nom,$ape,$fec,$peso)
{
	$conexion = CONEX();

	if (!$conexion)
	{
	echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
	exit();
	}


	$sql = "select max(id)+1 from clientes";
	$resultado=mysqli_query($conexion,"select max(id)+1 from clientes");
	$row = mysqli_fetch_row($resultado);
        $consulta = "INSERT INTO clientes VALUES ('$row[0]', '$nom', '$ape','$fec','$peso')";
	echo $consulta;
       if ($resultado = $conexion->query($consulta)) {
         printf("Se inserto en la tabla el registro : .\n", '$nom');
          }
     
}

function baja ($id)
{
	$conexion = CONEX();
	if (!$conexion)
	{
	echo "<h1>No se puede dar de baja. Error al conectar.</h1>";
		exit();
		}
	$consulta = "DELETE FROM clientes WHERE id = $id";
	echo $consulta . "<BR>";
        if ($resultado = $conexion->query($consulta)) {
         printf("Se elimino el registro  de la tabla : \n", $id);
          }
}





function modificacion ($id, $nom,$ape,$fec,$pes)
	{
	$conexion = CONEX();
	if (!$conexion)
	{
	echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
	exit();
	}
		

	$consulta = "update clientes set nombre='$nom', apellido='$ape', fecha_nac='$fec',peso='$pes'  where id = $id";
	echo $consulta . "<BR>";
        if ($resultado = $conexion->query($consulta)) {
         printf("Actualizacon del registro satisfactorio : \n", $id);
          }
     }




    
    
    
?>
