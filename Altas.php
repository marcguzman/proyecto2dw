<html>
    <head>
        <meta charset="UTF-8">
        <title>Altas</title>
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
        <h1 class="">Altas</h1>
        <nav class="menu">
        </nav>
    </header>
    <body>
        <?php
        // put your code here
        ?>
        <left>
        <form action="insertar.php" method="post" name="FrmIngreso" >
            <br><br>
            <h1>Nuevo Ingreso</h1>
            <br><br><br>
            Nombre   <input type="Text" id="Nombre" name="Nombre" /> 
            <br><br><br>
            Carnet   <input type="Text" id="Carnet" name="Carnet" /> 
            <br><br><br>
            Correo   <input type="Text" id="Email" name="Email" /> 
            <br><br><br>
            <input type="image" id="Grabar" name="Grabar" text="Grabar" value="Grabar" src="images/Agregar.png" onclick="javascript:document.form.submit();" />
        </form>
        </left>
    </body>
</html>
