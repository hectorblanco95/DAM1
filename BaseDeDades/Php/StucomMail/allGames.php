<!DOCTYPE html>
<!--
 Listado de todos los juegos paginado (de 5 en 5)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Games</title>
    </head>
    <body>
        <?php
        require_once "bbdd_user.php";
        if (isset($_GET["contador"])) {
            $contador = $_GET["contador"];
        } else {
            $contador = 0;
        }
        $total = totalGames();
        ?>
        <table>
            <tr><th>Nombre</th><th>Precio</th></tr>
            <?php
            $games = selectGames($contador, 5);
            while ($fila = mysqli_fetch_array($games)) {
                extract($fila);
                echo "<tr>";
                echo "<td>$name</td><td>$price</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <?php
        // Mostrando el anterior (en caso de que lo haya)
        if ($contador > 0) {
            echo "<a href='allGames.php?contador=".($contador-5)."'>Anterior </a>";
        }
        // Mostrando mensaje de los resultados actuales
        if (($contador + 5) <= $total) {
            echo "Mostrando de " . ($contador + 1) . " a " . ($contador + 5) . " de $total";
        } else {
            echo "Mostrando de " . ($contador + 1) . " a $total de $total";
        }
        // Mostrar el siguiente (en cado de que lo haya)
        if (($contador + 5) < $total) {
            echo "<a href='allGames.php?contador=".($contador+5)."'> Siguiente</a>";
        }
        ?>
    </body>
</html>
