<html>
    <head>
        <meta charset="UTF-8">
        <title>ex05</title>
    </head>
    <body>

        <?php
        //  Escribe el código que muestre los datos de las variables $numero, $numero1 y $numero2 ordenados de mayor a menor

        $num = 5;
        $num1 = -8;
        $num2 = 30;

        if ($num1 < $num2 && $num1 > $num) {
            echo "$num2 > $num1 > $num<br>";
        } else if ($num < $num1 && $num > $num2) {
            echo "$num1 > $num > $num2<br>";
        } else if ($num < $num2 && $num > $num1) {
            echo "$num2 > $num > $num1<br>";
        } else if ($num2 < $num1 && $num2 > $num) {
            echo "$num1 > $num2 > $num<br>";
        } else if ($num2 < $num && $num2 > $num1) {
            echo "$num > $num2 > $num1<br>";
        } else if ($num1 < $num && $num1 > $num2) {
            echo "$num > $num1 > $num2<br>";
        } else {
            echo"Numero erroneo<br>";
        }
        ?>
    </body>
</html>