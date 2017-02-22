<html>
    <head>
        <meta charset="UTF-8">
        <title>ex01</title>
    </head>
    <body>

        <?php
        // Escribe el código que a partir de una variable $numero indique si es mayor, menor o igual a 30.

        $num = 5;

        if ($num > 30) {
            echo "Es mayor que 30<br>";
        } else if ($num == 30) {
            echo "Es igual que 30<br>";
        } else if ($num < 30) {
            echo "Es menor que 30 <br/>";
        } else {
            echo"numero erroneo";
        }
        ?>
    </body>
</html>