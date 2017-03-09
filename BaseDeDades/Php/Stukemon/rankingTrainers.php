<!DOCTYPE html>
<html>
<head>
<link href="/BaseDeDades/Php/Stukemon/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table>
  <tr>
    <th>Nombre</th>
    <th>Nº de pokeballs</th>
    <th>Nº de pociones</th>
    <th>Puntos</th>
  </tr>

<?php

/* 
 * Página que mostrará todos los datos de todas los entrenadores
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'stukemonbbdd.php';

// Llamamos al método que devuelve todos los datos de los entrenadores
$entrenadores = selectAllTrainers();
// Mostramos título del listado
echo "<h2>Ranking de entrenadores</h2>";
// Mientras haya datos, leemos la fila y la mostramos
while ($fila = mysqli_fetch_array($entrenadores)) {
    extract($fila);
    // SIEMPRE después de un extract, las variables
    // tienen el nombre de los campos de la bbdd
    echo "<tr>
    <td>$name</td>
    <td>$pokeballs</td>
    <td>$potions</td>
    <td>$points</td>
  </tr><br>";
}?>
</table>

</body>
</html>