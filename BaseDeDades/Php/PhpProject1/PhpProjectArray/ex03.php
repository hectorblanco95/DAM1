<html>
    <head>
        <meta charset="UTF-8">
        <title>ex03</title>
    </head>
    <body>
        <?php
        //Calcula la suma de todos los elementos del array así como el v alor medio de los mismos.
        $suma = 0;
        $media = 0;
        for ($i = 0; $i < 10; $i++) {
            $numero[$i] = rand(0, 100);
            echo $numero[$i] . " ";
            $suma = $numero[$i] + $suma;
            
        }
        $media = $suma / count($numero); // count nº de elementos q tiene el array
        echo " suma= " . $suma;
        echo " media= " . $media;
        ?>
    </body>
</html>