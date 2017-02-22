<html>
    <head>
        <meta charset="UTF-8">
        <title>ex03</title>
    </head>
    <body>
        <?php
        //Modifica el código anterior para que muestre los número en filas de 10 números en cada fila.
        $contador = 0;
        for ($i = 0; $i < 101; $i+=3) {
            if ($contador == 10) {
                echo "<br>";
                $contador=0;
            }echo "$i ";
            $contador++;
        }
        ?>
    </body>
</html>