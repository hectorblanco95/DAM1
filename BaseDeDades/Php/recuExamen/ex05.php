<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex05</title>
    </head>
    <body>
        <?php
        // Ex05
        function func($notas) {
            $cont = 0;
            $resultado = 0;
            for ($i = 0; $i < 40; $i++) {
                $notas[$i] = rand(0, 10);
            }
            for ($i = 0; $i < count($notas); $i++) {
                if ($notas >= 5) {
                    $cont++;
                }
            }
            $resultado = ($cont * 100) / 40;
            return $resultado;
        }
        echo func($notas);
        ?>
    </body>
</html>
