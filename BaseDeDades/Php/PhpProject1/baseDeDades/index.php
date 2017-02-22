<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de un alumno</title>
    </head>
    <body>
        <form action="alta.php" method="POST">
            Nombre: <input type="text" name="nombre" required=""><br>
            Edad: <input type="number" name="edad" required=""><br>
            Ciudad: <input type="text" name="ciudad" required=""><br>
            Telefono: <input type="text" name="telefono" required=""><br>
            Sexo: <input type="text" name="sexo" required=""><br>
            <input type="submit" name="enviar" value="Alta"><br>
        </form>
    </body>
</html>
