<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex01</title>
    </head>
    <body>
        <?php
        // Ex01
        for ($i = 0; $i < 50; $i++) {
            $array[$i] = rand(0, 50);
            echo $i . "  ";
        } for ($i = 0; $i < 50; $i++) {
            if ($i == 0) {
                echo "<br>";
            }
            $array[$i] = rand(0, 50);
            echo $array[$i] . " ";
        } for ($i = 0; $i < 50; $i++) {
            if ($i == $array[$i]) {
                echo "<br> El número $array[$i] está en la posición $i.";
            }
        }
        ?>
    </body>
</html>
