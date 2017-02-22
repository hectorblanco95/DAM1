<html>
    <head>
        <meta charset="UTF-8">
        <title>ex06</title>
    </head>
    <body>
        <?php
        //Escribe el código en php que muestre la tabla del 2.
        $j = 2;
        for ($i = 0; $i <= 10; $i++) {
            $tabla = $j * $i;
            echo "$i * $j = $tabla<br>";
        }
        ?>
    </body>
</html>