<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex02</title>
    </head>
    <body>
        <form action="ex02.php" method="POST">
            <p>Nombre de la asignatura: <input type="text" name="asignatura"></p>
            <p>Introduce la nota: <input type="number" name="nota" min="0" max="10"></p>
            <p>Nombre de la asignatura: <input type="text" name="asignatura2"></p>
            <p>Introduce la nota: <input type="number" name="nota2" min="0" max="10"></p>
            <p>Nombre de la asignatura: <input type="text" name="asignatura3"></p>
            <p>Introduce la nota: <input type="number" name="nota3" min="0" max="10"></p>
            <p>Nombre de la asignatura: <input type="text" name="asignatura4"></p>
            <p>Introduce la nota: <input type="number" name="nota4" min="0" max="10"></p>
            <input type="submit" name="enviar" value="Enviar datos">
        </form>
        <?php
        // Ex02
        $asignatura = $_POST["asignatura"];
        $nota = $_POST["nota"];
        $asignatura2 = $_POST["asignatura2"];
        $nota2 = $_POST["nota2"];
        $asignatura4 = $_POST["asignatura3"];
        $nota3 = $_POST["nota3"];
        $asignatura4 = $_POST["asignatura4"];
        $nota4 = $_POST["nota4"];
        $media = 0;
        $numeroMayor = -1;
        $numeroMenor = 10;

        $arrayNotas = array($nota, $nota2, $nota3, $nota4);
        $arrayAsignaturas = array($asignatura, $asignatura2, $asignatura3, $asignatura4);
        for ($i = 0; $i < 4; $i++) {
            $media += $arrayNotas[$i];
            if ($arrayNotas[$i] > $numeroMayor) {
                $numeroMayor = $arrayNotas[$i];
                $asignatura = $arrayAsignaturas[$i];
            } if ($arrayNotas[$i] < $numeroMenor) {
                $numeroMenor = $arrayNotas[$i];
                $asignatura2 = $arrayAsignaturas[$i];
            }
        }
        echo "Media: " . $media / 4 . "<br>";
        echo "Numero mayor: " . $numeroMayor . " = " . $asignatura . "<br>";
        echo "Numero menor: " . $numeroMenor . " = " . $asignatura2;
        ?>
    </body>
</html>
