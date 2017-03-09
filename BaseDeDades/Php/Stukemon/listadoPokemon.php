<!DOCTYPE html>
<html>
<head>
<link href="/BaseDeDades/Php/Stukemon/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table>
  <tr>
    <th>Nombre</th>
    <th>Tipo</th>
    <th>Habilidad</th>
    <th>Nivel de ataque</th>
    <th>Nivel de defensa</th>
    <th>Velocidad</th>
    <th>Vida</th>
    <th>Nivel</th>
    <th>Entrenador</th>
  </tr>

<?php

/* 
 * Página que mostrará todos los datos de todas los pokemons
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'stukemonbbdd.php';

// Llamamos al método que devuelve todos los datos de los pokemons
$pokemons = selectAllPokemons();
// Mostramos título del listado
echo "<h2>Listado de pokemons</h2>";
// Mientras haya datos, leemos la fila y la mostramos
while ($fila = mysqli_fetch_array($pokemons)) {
    extract($fila);
    // SIEMPRE después de un extract, las variables
    // tienen el nombre de los campos de la bbdd
    echo "<tr>
    <td>$name</td>
    <td>$type</td>
    <td>$ability</td>
    <td>$attack</td>
    <td>$defense</td>
    <td>$speed</td>
    <td>$life</td>
    <td>$level</td>
    <td>$trainer</td>
  </tr><br>";
}?>
</table>

</body>
</html>