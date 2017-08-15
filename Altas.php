<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <center>
        <form action="insertar.php" method="post" name="FrmIngreso" >
            <br><br>
            Altas
            <br><br><br>
            Nombre   <input type="Text" id="Nombre" name="Nombre" /> 
            <br><br><br>
            Carnet   <input type="Text" id="Carnet" name="Carnet" /> 
            <br><br><br>
            Correo   <input type="Text" id="Email" name="Email" /> 
            <br><br><br>
            <input type="image" id="Grabar" name="Grabar" text="Grabar" value="Grabar" src="images/Agregar.png" onclick="javascript:document.form.submit();" />
        </form>
        </center>
    </body>
</html>
