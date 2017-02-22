<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex01</title>
    </head>
    <body>
        <?php
        // ex01
        $cont = 0;
        $suma = 0;
        $media = 0;
        for ($i = 0; $i < 40; $i++) {
            $numero[$i] = rand(0, 20);
            if ($i % 2 == 0) {
                echo $numero[$i] . " ";
            } else {
                $cont++;
                $suma = $numero[$i] + $suma;
            }
        }
        $media = $suma / $cont; //media y contador de las posiciones impares
        echo " suma= " . $suma;
        echo " media= " . $media;
        ?>
    </body>
</html>
