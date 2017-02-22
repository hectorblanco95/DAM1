<?php

/* 
 * Página que permite dar de alta un pokemon en la bbdd
 */

require_once 'stukemonbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['alta'])) {
   // Recogemos los datos del post
   $nom = $_POST['nombre'];
   $tipo = $_POST['tipo'];
   $habilidad = $_POST['habilidad'];
   $ataque = $_POST['ataque'];
   $defensa = $_POST['defensa'];
   $velocidad = $_POST['velocidad'];
   $vida = $_POST['vida'];
   $entrenador = $_POST['entrenador'];
   // Llamamos a la función que guarda los datos en la bbdd
   insertarPokemon($nom, $tipo, $habilidad, $ataque, $defensa, $velocidad, $vida, $entrenador);
} else {
// Formulario de alta pokemon
    echo "<form action ='' method='POST'>";
    echo "Nombre: <input type='text' name='nombre'><br>";
    echo "Tipo: <select name='tipo'>
                    <option value='agua'>Agua</option>
                    <option value='fuego'>Fuego</option>
                    <option value='viento'>Viento</option>
                    <option value='tierra'>Tierra</option>
                </select><br>"; 
    echo "Habilidad: <input type='text' name='habilidad'><br>";
    echo "Nivel de ataque: <input type='number' name='ataque'><br>";
    echo "Nivel de defensa: <input type='number' name='defensa'><br>";
    echo "Velocidad: <input type='number' name='velocidad'><br>";
    echo "Vida: <input type='number' name='vida'><br>";
    // Para indicar el entrenador el usuario debe escoger
// de entre los entrenadores que estén en la bbdd
// Creamos select para mostrar esos entrenadores
    echo "Selecciona el entrenador: <select name='entrenador'>";
// traemos los datos de la bbdd
    while ($fila = mysqli_fetch_array(selectNameEntrenadores())) {
        extract($fila);
        echo "<option value='$name'>$name</option>";
    }
    echo "</select><br>";
    echo "<input type='submit' name='alta' value='Alta'>";
    echo "</form>";
}