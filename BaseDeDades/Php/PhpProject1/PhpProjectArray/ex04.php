<html>
    <head>
        <meta charset="UTF-8">
        <title>ex04</title>
    </head>
    <body>
        <?php
        //Calcula el máximo del array e indica en qué posición del array está.
        $numeroMayor = -1;
        for ($i = 0; $i < 10; $i++) {
            $numero[$i] = rand(0, 100);
            echo $numero[$i] . " ";
            if ($numero[$i]>$numeroMayor){
               $numeroMayor=$numero[$i];
            }
        }
        echo " numero mayor= " . $numeroMayor; 
        echo " posicion= " . $numero[$i];
        ?>
    </body>
</html>

