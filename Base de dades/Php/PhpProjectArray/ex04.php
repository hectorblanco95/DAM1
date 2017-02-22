<html>
    <head>
        <meta charset="UTF-8">
        <title>ex04</title>
    </head>
    <body>
        <?php
        //Calcula el máximo del array e indica en qué posición del array está.
        $numeroMayor = -1;
        $contador = 0;
        for ($i = 0; $i < 10; $i++) {
            $numero[$i] = rand(0, 100);
            count($numero);
            echo $numero[$i] . " ";
            if ($numero[$i] > $numeroMayor) {
                $numeroMayor = $numero[$i];
                $contador = count($numero);
            }
        }
        echo " numero mayor= " . $numeroMayor;
        echo " Posición array= " . $contador;
        ?>
    </body>
</html>

