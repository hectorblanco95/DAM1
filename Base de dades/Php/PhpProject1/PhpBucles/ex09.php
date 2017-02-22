<html>
    <head>
        <meta charset="UTF-8">
        <title>ex09</title>
    </head>
    <body>
        <?php
        //Escribe el código que vaya sumando el valor de una variable $numero hasta que la suma sea mayor de 100. Debe ir mostrando el valor de la suma en cada iteración.
        $numero = 2;
        for ($i = $numero; $i <= 100; $i+=$numero) {
            echo "$i<br>";
        }
        ?>
    </body>
</html>