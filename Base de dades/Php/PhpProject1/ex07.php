<html>
    <head>
        <meta charset="UTF-8">
        <title>ex07</title>
    </head>
    <body>

        <?php
        //  Escribe el código que a partir de tres variables que indiquen dia, mes y año diga si la es correcta o no, en caso de que sea correcta debe indicar el mes forma de texto.

        $dia = 5;
        $mes = 8;
        $año = 30;

        if ($dia<31 && $dia>0) {
            echo "$dia Dia correcto<br>";
        } else if ($mes<13$num1 && $mes>0) {
            echo "$dia Mes correcto<br>";
        } else if ($año<2017 && $año=>0) {
            echo "$dia Año correcto<br>";
        } else {
            echo"Fecha incorrecta<br>";
        }
        ?>
    </body>
</html>