<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // ejemplo function; 
        $var1= array(1, 3, 5);
        func($var1);
                
        function func ($var1) {
            foreach($var1 as $value){
                echo $value . " ";
            }
            echo "<br>";
        }  
        ?>
    </body>
</html>
