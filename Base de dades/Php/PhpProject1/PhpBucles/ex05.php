<html>
    <head>
        <meta charset="UTF-8">
        <title>ex05</title>
    </head>
    <body>
        <?php
        //Escribe el código que a partir del valor de una variable $numero (por ejemplo 5), muestre el sumatorio de dicho número, es decir, debe mostrar el resultado de sumar 5+4+3+2+1.
        $i = 0;
        for ($numero = 5; $numero >= 0; $numero--) {
            $i+=$numero;
            if ($numero == 0) {
                echo "$numero";
            } else {
                echo "$numero+";
            }
        } echo "=$i";
        ?>
    </body>
</html>