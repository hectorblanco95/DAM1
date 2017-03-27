<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //ejercicio1
        $var1 = array(1, 3, 5);
        func($var1);

        function func($var1) {
        foreach ($var1 as $value) {
        echo $value . " ";
        }
        }

//ejercicio2
        function squared($n) {
        echo"Numero: $n </br>";

        echo ($n * $n) . "</br>";
        }

        $n = rand(1, 10);
        squared($n);

        //ejercicio3
        function gramos($n) {
        echo ($n * 1000) . " gramos";
        }

        $n = rand(1, 99);
        gramos($n);

        //ejercicio4
        $num = rand(1, 7);
        dia($num);

        function dia($num) {
        switch ($num) {
        case 1: $dia = "lunes";
        break;
        case 2: $dia = "martes";
        break;
        case 3: $dia = "miercoles";
        break;
        case 4: $dia = "jueves";
        break;
        case 5: $dia = "viernes";
        break;
        case 6: $dia = "sabado";
        break;
        case 7: $dia = "domingo";
        break;
        default: echo"El dia introducido no existe";
        }
        if (isset($dia))
        echo "el dia  $num  es $dia";
        }

        //ejercicio6
        function suma($a, $b, $c, $d, $e) {
        $sumar($a + $b + $c + $d + $e);
        echo $sumar;
        }

        suma(2, 3, 4, 5, 6);

        //ejercicio7
        function suma($a, $b, $c, $d, $e) {
        $sumar($a + $b + $c + $d + $e);
        echo $sumar;
        }

        $tmp = suma(2, 3, 4, 5, 6);
        echo $tmp;

        //ejercicio8
        function volumenCilindro($radio, $altura) {
        $volumen = pi() * math . pow($radio, 2) * $altura;
        return $volumen;
        }

        $dato = volumenCilindro(10, 1);
        echo $dato;

        //ejercicio9
        functio par($a) {
        if ($a % 2 == 0) {
        return true;
        } else {
        return false;
        }
        }
        $b = par(5);
        if ($b == true) {
        echo "El numero es par";
        } else {
        echo "El numero es impar";
        }

        //Version optimizada
        function par($num) {
        return ($num % 2 == 0);
        }

        if (par(8))
        echo "es par";
        else
        "no es par";

        //ejercicio10
        function calcularIva($base, $iva = 0.18) {
        $operacion = $base * $iva;
        return $operacion;
        }

        echo calcularIva(1000);
        echo "<br>";
        echo calcularIva(1000, 0.08);
        echo "<br>";
        echo calcularIva(10, 0);


        //ejercicio adicional
        function calcularMedia($array) {
        $suma = 0;
        foreach ($array as $value){
         $suma = $suma+$value;
        }
        return $suma/$cont($array);
        }
        $array = array(4, 6, 8, 2);
        $media = calcularmedia($array);
        echo $media . "<br>";
        array_push($array, 9); //$array[4]=9
        $media = caluclarMedia($array);
        echo $media. "<br>";
        ?>
    </body>
</html>
