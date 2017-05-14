<!DOCTYPE html>
<!--
 Listado de todos los juegos paginado (de 10 en 10)
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
        $total = totalEmails();
        ?>
        <table>
            <tr><th>Nombre</th><th>Nivel</th></tr>
            <?php
            $games = selectEmails($contador, 10);
            while ($fila = mysqli_fetch_array($games)) {
                extract($fila);
                echo "<tr>";
                echo "<td>$card</td><td>$level</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <?php
        // Mostrando el anterior (en caso de que lo haya)
        if ($contador > 0) {
            echo "<a href='allGames.1.php?contador=".($contador-10)."'>Anterior </a>";
        }
        // Mostrando mensaje de los resultados actuales
        if (($contador + 10) <= $total) {
            echo "Mostrando de " . ($contador + 1) . " a " . ($contador + 10) . " de $total";
        } else {
            echo "Mostrando de " . ($contador + 1) . " a $total de $total";
        }
        // Mostrar el siguiente (en cado de que lo haya)
        if (($contador + 10) < $total) {
            echo "<a href='allGames.1.php?contador=".($contador+10)."'> Siguiente</a>";
        }
        ?>
    </body>
</html>
