<html>
    <head>
        <meta charset="UTF-8">
        <title>ex06</title>
    </head>
    <body>

        <?php
        //  Escribe el código que a partir de tres variables que indiquen dia, mes y año diga si la es correcta o no, en caso de que sea correcta debe indicar el mes forma de texto.

        $dia = 5;
        $mes = 8;
        $año = 30;

        switch ($mes) {
            case 1:
                $nmes= "Enero<br>";
                break;
            case 2:
                $nmes= "Febrero<br>";
                break;
            case 3:
                $nmes= "Marzo<br>";
                break;
            case 4:
                $nmes= "Abril<br>";
                break;
            case 5:
                $nmes= "Mayo<br>";
                break;
            case 6:
                $nmes= "Junio<br>";
                break;
            case 7:
                $nmes= "Julio<br>";
                break;
            case 8:
                $nmes= "Agosto<br>";
                break;
            case 9:
                $nmes= "Septiembre<br>";
                break;
            case 10:
                $nmes= "Octubre<br>";
                break;
            case 11:
                $nmes= "Noviembre<br>";
                break;
            case 12:
                $nmes= "Diciembre<br>";
                break;
            default;
                echo "Numero del mes incorrecto<br>";
        }

        if ($dia < 31 && $dia > 0) {
            echo "$dia Dia correcto<br>";
        } if ($mes < 13 && $mes > 0) {
            echo "$mes $nmes Mes correcto<br>";
        } if ($año < 2017 && $año >= 0) {
            echo "$año Año correcto<br>";
        } else {
            echo"Fecha incorrecta<br>";
        }
        ?>
    </body>
</html>