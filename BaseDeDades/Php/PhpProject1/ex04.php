<html>
    <head>
        <meta charset="UTF-8">
        <title>ex04</title>
    </head>
    <body>

        <?php
        //  Escribe el código que nos indique si el valor de $numero es múltiplo de 2 o superior a 20.

        $num = 5;

        if ($num % 2 == 0) {
            echo "$num Es multiple de 2 <br>";
        } else if ($num > 20) {
            echo "$num Es superior a 20 <br>";
        } else {
            echo"Numero erroneo<br>";
        }
        ?>
    </body>
</html>