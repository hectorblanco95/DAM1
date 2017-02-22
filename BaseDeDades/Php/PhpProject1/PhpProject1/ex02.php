<html>
    <head>
        <meta charset="UTF-8">
        <title>ex02</title>
    </head>
    <body>

        <?php
        // Escribe el código que a partir de dos variables $numero1 y $numero2 indique cuál es mayor y cual es menor. En caso de empate debe indicar que son iguales. También debe mostrar el resultado de sumarlos y restarlos.

        $num = 5;
        $num2 = 6;

        if ($num > $num2) {
            echo "$num Es mayor que $num2 <br>";
        } else if ($num == $num2) {
            echo "$num Es igual que $num2 <br>";
        } else if ($num < $num2) {
            echo "$num Es menor que $num2 <br>";
        } else {
            echo"numero erroneo<br>";
        }
        $suma = $num + $num2;
        $resta = $num - $num2;
        echo "La suma de $num+$num2 es = $suma <br>";
        echo "La resta de $num-$num2 es = $resta <br>";
        ?>
    </body>
</html>