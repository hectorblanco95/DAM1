<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul>
            <?php
            $numero = $_GET["numero"];
            for ($k = 0; $k <= $numero; $k++) {
                ?><li>
                    <?php echo $k; ?> 
                </li>
                <?php
                // echo '<li>'.$k.'</li>'; //<li>$k</li>
            }
            ?>
        </ul>

    </body>
</html>
