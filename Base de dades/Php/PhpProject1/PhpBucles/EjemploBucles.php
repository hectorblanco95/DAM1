<html>
    <head>
        <meta charset="UTF-8">
        <title>EjemploBucles</title>
    </head>
    <body>
        <?php
        // Contar del 0 al 4 con for
        for ($i = 0; $i < 5; $i++) {
            echo "Valor de i: $i<br>";
        }
        // contar del 0 al 4 con while 
        $i = 0;
        while ($i < 5) {
            echo "Valor de i: $i<br>";
            $i++;
        }

        $suma = 0;
        // quiero que siga sumando hasta que el nº supere 1000
        while ($suma < 1000) {
            $suma += rand(100, 500); // $suma = $suma + rand(100,500)
            echo "Suma vale $suma<br>";
        }

        $num = 0;
        do {
            echo "$num<br>";
            $num++;
        } while ($num < 5);
        ?>
    </body>
</html>