<!DOCTYPE html>
<html>
<head>
<link href="/BaseDeDades/Php/Catering/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table>
  <tr>
    <th>Dni</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Telefeno</th>
    <th>Nacimiento</th>
    <th>Contrato</th>
  </tr>

<?php

/* 
 * Página que mostrará todos los datos de todas los cocineros
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'cateringbbdd.php';

// Llamamos al método que devuelve todos los datos de los cocineros
$cocineros = selectAllCocineros();
// Mostramos título del listado
echo "<h2>Listado de Cocineros</h2>";
// Mientras haya datos, leemos la fila y la mostramos
while ($fila = mysqli_fetch_array($cocineros)) {
    extract($fila);
    // SIEMPRE después de un extract, las variables
    // tienen el nombre de los campos de la bbdd
    echo "<tr>
    <td>$dni</td>
    <td>$nombre</td>
    <td>$apellidos</td>
    <td>$telefono</td>
    <td>$nacimiento</td>
    <td>$contrato</td>
  </tr>";
}?>
</table>

</body>
</html>