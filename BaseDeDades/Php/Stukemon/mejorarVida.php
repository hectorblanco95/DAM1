<?php

/* 
 * Página que mostrará un select para aumentar los puntos de salud
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'stukemonbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['selecciona'])) {
    // Recogemos los datos del post
    $name = $_POST['trainer'];
    //Formulario pokemons
    echo "<form action ='' method='POST'>";
    // Para indicar el pokemon el usuario debe escoger
    // de entre los pokemons que tienen entrenador en la bbdd
    // Creamos select para mostrar esos pokemons
    echo "Selecciona los pokemons para la batalla: <select name='pokemon'>";
    // traemos los datos de la bbdd
    $pokemons = selectLifePokemons($name);
    while ($fila = mysqli_fetch_array($pokemons)) {
    extract($fila);
    echo "<option value='$name'>Pokemon: $name, Vida: $life</option>";
    } 
    echo "</select> ";
    echo "<input type='submit' name='mejorar' value='Mejorar'>";
    echo "</form>";
} else if (isset($_POST['mejorar'])) {
    $name = $_POST['pokemon'];
    // Llamamos a la función que guarda los datos en la bbdd
    setLifePokemons($name);
} else{
    //Formulario seleccionar entrenador
    echo "<form action ='' method='POST'>";
    // Para indicar las pociones el usuario debe escoger
    // de entre los entrenadores que tienen pociones que estén en la bbdd
    // Creamos select para mostrar esos entrenadores
    echo "Selecciona el entrenador: <select name='trainer'>";
    // traemos los datos de la bbdd
    $entrenadores = selectPotionsEntrenadores();
   while ($fila = mysqli_fetch_array($entrenadores)) {
      extract($fila);
        echo "<option value='$name'>Trainer: $name, Potions: $potions</option>";
  }
    echo "</select> ";
    echo "<input type='submit' name='selecciona' value='Seleccionar'>";
    echo "</form>";
}