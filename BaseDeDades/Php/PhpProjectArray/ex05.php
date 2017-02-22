<html>
    <head>
        <meta charset="UTF-8">
        <title>ex05</title>
    </head>
    <body>
        <?php
        //Calcula el mínimo del array e indica en qué posición del array está.
        $numeroMenor = 101;
        $contador = 0;
        for ($i = 0; $i < 10; $i++) {
            $numero[$i] = rand(0, 100);
            count($numero);
            echo $numero[$i] . " ";
            if ($numero[$i] < $numeroMenor) {
                $numeroMenor = $numero[$i];
                $contador = count($numero);
            }
        }
        echo " Numero menor= " . $numeroMenor;
        echo " Posición array= " . $contador;
        ?>
    </body>
</html>