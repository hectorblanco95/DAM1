<?php

/* 
 * Fichero que incluirá todas las funciones relacionadas
 * con la base de datos
 */

// Función que inserta un camión en la bbdd
function insertarCamion($matricula, $modelo, $capacidad, $conductor) {
  $con = conectar("transport");
  $insert = "insert into truck values ('$matricula', '$modelo', $capacidad, '$conductor');";
  if (mysqli_query($con, $insert)) {
        // Si ha ido bien
        echo "Camion dado de alta.";
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que devuelve el nombre de todos los entrenadores
function selectNameEntrenadores() {
    $con = conectar("stukemon");
    $select = "SELECT trainer.name
                FROM trainer LEFT JOIN pokemon ON trainer.name = pokemon.trainer
                GROUP BY trainer.name
                HAVING COUNT(pokemon.trainer) < 6;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que actualiza (modifica) los datos de una ciudad
function modificarCiudad($cpactual, $cpnuevo, $nombre) {
    $con = conectar("transport");
    $update = "update city set name='$nombre', 
            postalcode='$cpnuevo' where postalcode='$cpactual'";
    if (mysqli_query($con, $update)) {
        echo "Ciudad modificada.";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}


// Función que devuelve todos los datos de una ciudad
// a partir de un código postal q recibe como parámetro
function selectCiudadbyCodigoPostal($codigopostal) {
    $con = conectar("transport");
    $select = "select * from city where postalcode='$codigopostal'";
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

// Función que recibe un código postal y 
// borra la ciudad de la bbdd que tenga ese código postal
function borrarCiudad($codigopostal) {
    $con = conectar("transport");
    $delete = "delete from city where postalcode='$codigopostal'";
    if (mysqli_query($con, $delete)) {
        echo "Ciudad borrada.";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que devuelve todos los datos de todas las ciudades
function selectAllCiudades() {
    $con = conectar("transport");
    $select = "select * from city";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
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

