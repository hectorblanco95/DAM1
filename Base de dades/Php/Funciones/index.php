<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funciones</title>
    </head>
    <body>
        <?php
        $n = "Pepe";
        saludar($n);
        saludar("Maria");
        $nombre = "Eusebio";
        saludar($nombre);
        saludar($nombre);
        $r = suma(234, 456, 567);
        echo "El resultado de la suma es $r<br>";
        $esMultiplo = multiploDeTres(23456);
        if ($esMultiplo == true) {
            echo "23456 es multiplo de tres<br>";
        } else {
            echo "23456 no es multiplo de tres<br>";
        }
        $mivariable = 5;
        echo "mi variable vale: $mivariable<br>";
        valor($mivariable);
        echo "Despues de llamar a valor vale: $mivariable<br>";
        referencia($mivariable);
        echo "Despues de llamar a referencia vale: $mivariable<br>";
        ?>
        <?php

        //bloque para las funciones
        //Ejemplo de paso por referencia
        function referencia(&$a) {
            $a+=10;
        }

        //Ejemplo de paso por valor
        function valor($a) {
            $a+=10;
        }

        //Función con dos return (OJO! Devuelve un unico valor 
        //Indica si un numero es multiple de 3
        function multiploDeTres($numero) {
            if ($numero % 3 == 0) {
                return true;
            }
            return false;
        }

        function suma($a, $b) {
            $resultado = $a + $b;
            echo $resultado;
        }

        //procedimiento que saluda
        function saludar($nombre = "amigo") {
            echo "hola $nombre<br>";
            $nombre = "Miguel";
        }
        ?>
    </body>
</html>
