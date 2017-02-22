<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex05</title>
    </head>
    <body>
        <form action="ex05.php" method="POST">
            <p>Introduce un numero: <input type="number" name="var1"></p>

            <input type="submit" name="enviar" value="Enviar datos">
        </form>
        <?php
        // ex05
        $var1=$_POST["var1"];
        func($var1);

        function func($var1) {
            if ($var1 < 0) {
                echo $var1 . " = -1: és negativo <br>";
            } else if ($var1 > 0) {
                echo $var1 . " = 1: és positivo <br>";
            } else {
                echo $var1 . " = 0: és igual a 0";
            }
        }
        ?>
    </body>
</html>