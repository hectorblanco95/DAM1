<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero[] = 5;
        $numero[] = 6;
        $numero[] = 1;
        
        echo $numero[2];
        echo "<br>";
        
        $edad[0] = 24;
        $edad[1] = 30;
        
        echo $edad[0];
        echo "<br>";
        
        $notas = array(2, 5, 8, 10, 6);
        
        echo $notas[3];
        echo "<br>";
        
        $dato["nombre"] = "Pepe";
        $dato["edad"] = 20;
        $dato["ciudad"] = "Barcelona";
        
        echo $dato["nombre"]." ".$dato["edad"]." ".$dato["ciudad"];
        echo "<br>";
        
        extract($datos);
        echo  "$nombre $edad $ciudad<br>";
        
        //otra manera de crear un array con Strings en clave
        $cartas = array("tipo"=> "tropa", "elexir"=> 4, "medio"=>"terrestre");
        
        //sacamos el medio de cartas
        echo $cartas["medio"];
        echo "<br>";
        
        //recorrer un array con un for tradicional para mostrar los valores
        for ($i = 0; $i < count($notas); $i++){
            echo $notas[$i]." ";
        }
        echo "<br>";
        //recoremos array usando foreach
        foreach ($notas as $notaActual){
            echo $notaActual." ";
        }
        echo "<br>";
        
        //modificar el array (multiplicamos por 2 los valores de $numero)
        foreach ($numero as $numeroActual){
            $numeroActual +=2;
        }
        
        //mostramos los datos a ver si se han multiplicado
        foreach ($numero as $num){
            echo $num." ";
        }
        echo "<br>";
       
        ?>
    </body>
</html>
