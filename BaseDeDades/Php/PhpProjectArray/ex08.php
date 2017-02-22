<html>
    <head>
        <meta charset="UTF-8">
        <title>ex08</title>
    </head>
    <body>
        <?php
        //Guarda los datos de unos alumnos en las variables que consideres necesarias. Los datos son nombre y nota.


        $alumnos = array($a => "Isabel", $b => "Mireia", $c => "Juan", $d => "Pepe", $e => "Miguel");
        $notas = array($a => 5, $b => 8, $c => 7, $d => 4, $e => 6);

        $contador = 0;
        $notaMenor = 11;

        echo $alumnos[$a], [$b], [$c], [$d], [$e];
        echo $notas;


        for ($i = 0; $i < 5; $i++) {
            count($notas);
            if ($notas[$a] || $notas[$b] || $notas[$c] || $notas[$d] || $notas[$e] < $notaMenor) {
                $notaMenor = $notas[$a] || $notas[$b] || $notas[$c] || $notas[$d] || $notas[$e];
                $alumno[$a] || $alumnos[$b] || $alumnos[$c] || $alumnos[$d] || $alumnos[$e] = count($notas);
            }
        }
        echo $alumnos;
        echo $notas[$a] || $notas[$b] || $notas[$c] || $notas[$d] || $notas[$e];
        ?>
    </body>
</html>