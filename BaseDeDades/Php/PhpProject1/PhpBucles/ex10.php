<html>
    <head>
        <meta charset="UTF-8">
        <title>ex10</title>
    </head>
    <body>
        <?php
        //Escribe el código que calcule la suma de los 10 primeros números impares y la media.
        $suma=3;
        $j=1;
        for ($i = 1; $i <= 19; $i+=2) {
            $suma+=$i;
            $j+=2;
            echo "$i+$j = $suma<br>";
        }
        ?>
    </body>
</html>