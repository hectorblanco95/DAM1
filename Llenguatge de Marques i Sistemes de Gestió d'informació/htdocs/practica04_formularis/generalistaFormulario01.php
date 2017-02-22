<html>
    <head>
        <meta charset="UTF-8">
        <title>formulario01</title>
    </head>
    <body>
        <ul>
            <?php
            $num = $_GET['num'];
            for ($i = 0; $i <= $num; $i++) {
                ?><li>
                    <?php echo $i; ?> 
                </li>
                <?php
                // echo '<li>'.$k.'</li>'; //<li>$k</li>
            }
            ?>
        </ul>
    </body>
</html>