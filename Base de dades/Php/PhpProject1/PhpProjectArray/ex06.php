<html>
    <head>
        <meta charset="UTF-8">
        <title>ex06</title>
    </head>
    <body>
        <?php
        //Muestra los datos del array. Modifica la edad a 24. Vuelv e a mostrar los datos. Elimina el dato correspondiente a la ciudad del array. Vuelv e a mostrar los datos. 
        $nombre["Nombre"] = "Sara";
        $apellidos["Apellidos"] = "Martinez";
        $edad["Edad"] = 23;
        $ciudad["Ciudad"] = "Barcelona";

        echo "Nombre: " . $nombre["Nombre"] . "<br>";
        echo "Apellidos: " . $apellidos["Apellidos"] . "<br>";
        echo "Edad: " . $edad["Edad"] . "<br>";
        echo "Ciudad: " . $ciudad["Ciudad"] . "<br>";
        $edad["Edad"] = 24;
        echo "<br>Nombre: " . $nombre["Nombre"] . "<br>";
        echo "Apellidos: " . $apellidos["Apellidos"] . "<br>";
        echo "Edad: " . $edad["Edad"] . "<br>";
        ?>
    </body>
</html>

