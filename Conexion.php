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

    
    
    
?>
