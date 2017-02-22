<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Restaurant</title>
    </head>
    <body>
        <?php
        if (isset($_POST["enviar"])) {
            // Recibimos los datos del formulario (POST)
            $nombre = $_POST["nombre"];
            $telefono = $_POST["telefono"];
            $sexo = $_POST["sexo"];
            $edad = $_POST["edad"];
            $experiencia = $_POST["experiencia"];
            $especialidad = $_POST["especialidad"];


            // Necesitamos incluir el fichero bbdd.php
            require_once('bbdd.php');
            // Insertamos datos en la bbdd
            insertarCocinero($nombre, $telefono, $sexo, $edad, $experiencia, $especialidad);
        } else {
            echo ' 
        <form action = "" method = "POST">
        Nombre: <input type = "text" name = "nombre" required><br>
        Teléfono: <input type = "text" pattern=".{9,9}" maxlength="9" name = "telefono" required><br>
        Sexo: mujer<input type = "radio" name = "sexo" value="mujer">
        hombre<input type = "radio" name = "sexo" value="hombre"><br>
        Edad: <input type = "number" min="20" max="65" name = "edad" required><br>
        Experiencia: <input type = "number" min="0" max="5" name = "experiencia" required><br>   
        Especialidad: <select name = "especialidad" required>
        <option>SELECCIONA UNA OPCION</option>
             <option value="postres">postres</option>
             <option value="segundosPlatos">segundoes platos</option>
             <option value="primerosPlatos">primeros platos</option>
             <option value="entrants">entrants</option>
        </select>
       
        <input type = "submit" name = "enviar" value = "Alta"><br>
        </form>';
        }
        ?>
    </body>
</html>
