<html>
    <head>
        <meta charset="UTF-8">
        <title>ex03</title>
    </head>
    <body>

        <?php
        // Escribe el código que nos diga si la variable $numero es par o impar.

        $num = 5;

        if ($num % 2 == 0) {
            echo "$num Es par <br>";
        } else if ($num % 2 == 1) {
            echo "$num Es impar <br>";
        } else {
            echo "Numero erroneo<br>";
        }
        ?>
    </body>
</html>