<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex04</title>
    </head>
    <body>
        <?php
        // ex04
        $ciudad["ciudad"] = "Castelldefels";
        $comarca["comarca"] = "Baix Llobregat";
        $provincia["provincia"] = "Barcelona";
        $orden["orden"] = 15;
        $valoracion["valoracion"] = 9;
        $playa["playa"] = "Sí";
        
        echo $ciudad["ciudad"] . " ";
        echo $comarca["comarca"] . " ";
        echo $provincia["provincia"] . " ";
        echo $orden["orden"] . " ";
        echo $valoracion["valoracion"] . " ";
        echo $playa["playa"] . "<br>";
        $orden["orden"] = 88;
        echo $ciudad["ciudad"] . " ";
        echo $comarca["comarca"] . " ";
        echo $provincia["provincia"] . " ";
        echo $orden["orden"] . " ";
        echo $valoracion["valoracion"] . " ";
        echo $playa["playa"] . "<br>";
        echo $ciudad["ciudad"] . " ";
        echo $comarca["comarca"] . " ";
        echo $provincia["provincia"] . " ";
        echo $orden["orden"] . " ";
        echo $valoracion["valoracion"];
        ?>
    </body>
</html>
