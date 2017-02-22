<html>
    <head>
        <meta charset="UTF-8">
        <title>ex05</title>
    </head>
    <body>
        <?php
        //Calcula el mínimo del array e indica en qué posición del array está.
        $numeroMenor = 101;
        for ($i = 0; $i < 10; $i++) {
            $numero[$i] = rand(0, 100);
            echo $numero[$i] . " ";
            if ($numero[$i] < $numeroMenor) {
                $numeroMenor = $numero[$i];
                $posArray = $numero[i];
            }
        }
        echo " numero menor= " . $numeroMenor;
        echo " array= " . $posArray;
        
        ?>
    </body>
</html>

