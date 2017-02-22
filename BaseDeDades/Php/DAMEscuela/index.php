<!DOCTYPE html>
<!--
    Primera versión conectando a una BBDD
    index.php va a ser el formulario de Alta de un alumno
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta de un alumno</title>
    </head>
    <body>
        <a href="listadoAlumnes.php">Ver listado de alumnos</a>
        <br>
        
        <?php
        if (isset($_POST["enviar"])) {
            // Recibimos los datos del formulario (POST)
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];
            $ciudad = $_POST["ciudad"];
            $telefono = $_POST["telefono"];
            $sexo = $_POST["sexo"];

            // Necesitamos incluir el fichero bbdd.php
            require_once('bbdd.php');
            // Insertamos datos en la bbdd
            insertarAlumno($nombre, $edad, $ciudad, $telefono, $sexo);
        } else {
            echo ' 
        <form action = "" method = "POST">
        Nombre: <input type = "text" name = "nombre" required><br>
        Edad: <input type = "number" name = "edad" required><br>
        Ciudad: <input type = "text" name = "ciudad" required><br>
        Teléfono: <input type = "text" name = "telefono" required><br>
        Sexo: <input type = "text" name = "sexo" required><br>
        <input type = "submit" name = "enviar" value = "Alta"><br>
        </form>';
        }
        ?>
    </body>
</html>
