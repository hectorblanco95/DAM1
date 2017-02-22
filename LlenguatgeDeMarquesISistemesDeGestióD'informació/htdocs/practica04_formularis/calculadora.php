<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <form action="calculadora.php">
            <div>
                1er numero: <input required="" type="number" placeholder="inputNumero" name="numero1"/>
                <input type="submit" name="operacion" value="+"/>
                <input type="submit" name="operacion" value="-"/></div>
            <div>
                2o numero: <input required="" type="number" placeholder="inputnumero" name="numero2"/> 
                <input type="submit" name="operacion" value="/"/>
                <input type="submit" name="operacion" value="*"/></div>
            <?php
            if (isset($_GET['numero1']) == TRUE) {
                $numero1 = $_GET['numero1'];
                $numero2 = $_GET['numero2'];
                $operacion = $_GET['operacion'];
                if ($operacion == '+') {
                    echo "resultado: ";
                    echo $numero1 + $numero2;
                } else if ($operacion == '-') {
                    echo "resultado: ";
                    echo $numero1 - $numero2;
                } else if ($operacion == '/') {
                    echo "resultado: ";
                    echo $numero1 / $numero2;
                } else if ($operacion == '*') {
                    echo "resultado: ";
                    echo $numero1 * $numero2;
                }
            }
            ?>
        </form>   
    </body>
</html>
