<html>
    <head>
        <meta charset="UTF-8">
        <title>ex07</title>
    </head>
    <body>
        <?php
        //Modifica el código anterior para que muestre la tabla del valor que indique en la variable $tabla.
        $j = 2;
        for ($i = 0; $i <= 10; $i++) {
            $tabla = $j * $i;
            echo "$i * $j = $tabla<br>";
        }
        ?>
    </body>
</html>