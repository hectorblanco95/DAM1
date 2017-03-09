<!DOCTYPE html>
<html>
<head>
<link href="/BaseDeDades/Php/Stukemon/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table>
  <tr>
    <th>Winner</th>
    <th>Batallas ganadas</th>
  </tr>

<?php

/* 
 * Página que mostrará todos los datos del  ranking de la batalla
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'stukemonbbdd.php';

// Llamamos al método que devuelve el ranking de la batalla
$rankBatalla = rankingBatalla();
// Mostramos título del listado
echo "<h2>Ranking de Batallas</h2>";
// Mientras haya datos, leemos la fila y la mostramos
while ($fila = mysqli_fetch_array($rankBatalla)) {
    extract($fila);
    // SIEMPRE después de un extract, las variables
    // tienen el nombre de los campos de la bbdd
    echo "<tr>
    <td>$winner</td>
    <td>$cont</td>
  </tr><br>";
}?>
</table>

</body>
</html>