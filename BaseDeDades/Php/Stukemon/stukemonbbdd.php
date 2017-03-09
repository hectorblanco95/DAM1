<?php

/* 
 * Fichero que incluirá todas las funciones relacionadas
 * con la base de datos
 */

// Función que mejora la vida del pokemon
function setLifePokemons($name) {
    $con = conectar("stukemon");
    $update = "update pokemon set life=life+50 where name='$name';";
    $potions = "update trainer set potions=potions-1 where name='$name';";
    // Ejecutamos la consulta
    if (mysqli_query($con, $update, $potions)) {
        // Si ha ido bien
        echo "Vida mejorada!";
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que devuelve los entrenadores con pokemons
function selectLifePokemons($name) {
    $con = conectar("stukemon");
    $select = "SELECT name, life from pokemon where trainer='$name';";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve el nombre de los entrenadores que disponen de pociones de salud
function selectPotionsEntrenadores() {
    $con = conectar("stukemon");
    $select = "SELECT name, potions from trainer where potions>0 and name in(select trainer from pokemon);";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve el ranking de la batalla
function rankingBatalla() {
    $con = conectar("stukemon");
    $select = "select winner, count(*) as cont from battle group by winner order by cont desc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}
 
// Función que devuelve todos los datos de todas los entrenadores
function selectAllTrainers() {
    $con = conectar("stukemon");
    $select = "select * from trainer order by points desc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}  
 
// Función que devuelve todos los datos de todas los pokemons
function selectAllPokemons() {
    $con = conectar("stukemon");
    $select = "select * from pokemon order by level desc, life desc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 
 
// Función que devuelve los entrenadores con pokemons
function selectPokemons($name) {
    $con = conectar("stukemon");
    $select = "SELECT name from pokemon where trainer='$name';";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve los entrenadores con pokemons
function selectTrainers() {
    $con = conectar("stukemon");
    $select = "SELECT distinct trainer from pokemon;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve el nombre de los entrenadores con menos de 6 pokemons
function selectNameEntrenadores() {
    $con = conectar("stukemon");
    $select = "SELECT trainer.name
                FROM trainer LEFT JOIN pokemon ON trainer.name = pokemon.trainer
                GROUP BY trainer.name
                HAVING COUNT(*) < 6;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que inserta un pokemon en la bbdd
// Recibe todos sus datos como parámetro
function insertarPokemon($nom, $tipo, $habilidad, $ataque, $defensa, $velocidad, $vida, $entrenador) {
    $con = conectar("stukemon");
    $insert = "insert into pokemon values ('$nom', '$tipo', '$habilidad', $ataque, $defensa, $velocidad, $vida, 0, '$entrenador')";
    // Ejecutamos la consulta
    if (mysqli_query($con, $insert)) {
        // Si ha ido bien
        echo "Pokemon dado de alta.";
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que inserta un entrenador en la bbdd
// Recibe un nombre, pokeballs y pociones como parámetro
function insertarEntrenador($nom, $pokeballs, $pociones) {
    $con = conectar("stukemon");
    $insert = "insert into trainer values ('$nom', $pokeballs, $pociones, 0)";
    // Ejecutamos la consulta
    if (mysqli_query($con, $insert)) {
        // Si ha ido bien
        echo "Entrenador dado de alta.";
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}


// Función para conectar con la bbdd
function conectar($database) {
    $con = mysqli_connect("localhost", "root", "", $database)
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

// Función que cierra la conexión con la bbdd
function desconectar($conexion) {
    mysqli_close($conexion);
}