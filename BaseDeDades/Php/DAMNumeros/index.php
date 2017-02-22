<!DOCTYPE html>
<!--
    Aplicación que le pide al usuario cuántos nºs quiere introducir.
    Una vez indicados, crea tantos input como números necesite guardar el usuario.
    Una vez introducidos nos indicará la suma, media y cantidad de nºs pares que hay
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Formulario que pide la cantidad de nºs -->
        <form method="POST" action="">
            Cantidad de números: 
            <input type="number" name="cantidad"><br>
            <input type="submit" value="Enviar">
        </form>
        <form method  ="POST" action="resultados.php">
            <?php
            // Validamos que haya introducido una cantidad
            if (isset($_POST["cantidad"])) {
                // Leemos la cantidad indicada por el usuario
                $cantidad = $_POST["cantidad"];
                // Creamos tantos inputs como cantidad
                for ($i = 0; $i < $cantidad; $i++) {
                    echo "<input type='number' name='numeros[]'><br>";
                }
                // Ponemos el botón
                echo "<input type='submit' value='Calcular'>";
            }
            ?>
        </form>
    </body>
</html>
