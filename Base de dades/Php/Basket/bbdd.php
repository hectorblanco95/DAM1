<?php

/*
 * Fichero con los métodos para acceder a la bbdd
 */

//Funcion que a partir del nombre de un equipo devuelve todos sus datos
function selectEquipoByNombre($nuevoEquipo) {
    $con = conectar("basket");
    $query = "select * from team where name='$nuevoEquipo';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}

//Función que devuelve los nombres de todos los equipos
function selectNombreEquipo() {
    $con = conectar("basket");
    $query = "select name from team;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}

//Funcion que conecta la bbdd y devuelve
//el resultado de ejecutar select * from team
function selectAllEquipos() {
    //conectamos con la bbdd
    $conexion = conectar("basket");
    //Ejecutamos la consulta recogiendo el resultado
    $resultado = mysqli_query($conexion, "select * from team");
    desconectar($conexion);
    return $resultado;
}

// Función que conecta con BBDD
// Inserta un equipo con los valores que recibe como parámetros
// Cierra conexión con la bbdd
function insertarNuevoEquipo($nuevoEquipo, $city, $date) {
    // Conectamos a la bbdd, si no conecta interrumpe el programa
    $conexion = conectar("basket");

// Tenemos la conexión con la BBDD :)
// Preparamos el insert
    $insert = "insert into team
         values('$nuevoEquipo', '$city', '$date')";
    // Insertamos en la bbdd
    if (mysqli_query($conexion, $insert)) {
        // Ha ido todo bien
        echo "Equipo dado de alta<br>";
    } else {
        // Si hay error lo mostramos por pantalla
        echo mysqli_error($conexion);
    }
    // Desconectamos
    desconectar($conexion);
}

//Funcion que modifica los datos del equipo (Excepto el nombre, pq es primary key)
function modificarEquipo($nuevoEquipo, $city, $date) {
    $con = conectar("basket");
    $update = "update team set city='$city', creation='$date' where name='$nuevoEquipo'";
    if (mysqli_query($con, $update)) {
        echo "Equipo modificado";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que conecta con la bbdd que se pasa por 
// parámetro y devuelve la conexión
// Si hay error muestra msg de error y se interrumpe ejecución
function conectar($database) {
    $conexion = mysqli_connect("localhost", "root", "", $database)
            or die("No se ha podido conectar a la BBDD");
    return $conexion;
}

// Función que cierra la conexión con la bbdd
function desconectar($conexion) {
    mysqli_close($conexion);
}

function borrarEquipo($nuevoEquipo){
    $con= conectar("basket");
    $delete = "delete from team where name='$nuevoEquipo'";
    if (mysqli_query($con, $delete)) {
        echo "Equipo eliminado!";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}





//Funcion que a partir del nombre de un jugador devuelve todos sus datos
function selectJugadorByNombre($nuevoJugador) {
    $con = conectar("basket");
    $query = "select name, birth, nbaskets, nassists, nrebounds, position from player where name='$nuevoJugador';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function selectEquipoByJugador($team) {
    $con = conectar("basket");
    $query = "select team from player where team='$team';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function selectJugadorByEquipos($team) {
    $con = conectar("basket");
    $query = "select * from player where team='$team';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}

//Función que devuelve los nombres de todos los jugadores
function selectNombreJugador() {
    $con = conectar("basket");
    $query = "select name from player;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
function selectNombreEquipos() {
    $con = conectar("basket");
    $query = "select * from player;";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}
//Funcion que conecta la bbdd y devuelve
//el resultado de ejecutar select * from player
function selectAllJugadores() {
    //conectamos con la bbdd
    $conexion = conectar("basket");
    //Ejecutamos la consulta recogiendo el resultado
    $resultado = mysqli_query($conexion, "select * from player");
    desconectar($conexion);
    return $resultado;
}

// Función que conecta con BBDD
// Inserta un jugador con los valores que recibe como parámetros
// Cierra conexión con la bbdd
function insertarNuevoJugador($nuevoJugador, $fecha, $ncanastas, $nassistencias, $nrebotes, $position, $equipo) {
    // Conectamos a la bbdd, si no conecta interrumpe el programa
    $conexion = conectar("basket");

// Tenemos la conexión con la BBDD :)
// Preparamos el insert
    $insert = "insert into player
         values('$nuevoJugador', '$fecha', $ncanastas, $nassistencias, $nrebotes, '$position', '$equipo')";
    // Insertamos en la bbdd
    if (mysqli_query($conexion, $insert)) {
        // Ha ido todo bien
        echo "Jugador dado de alta<br>";
    } else {
        // Si hay error lo mostramos por pantalla
        echo mysqli_error($conexion);
    }
    // Desconectamos
    desconectar($conexion);
}

//Funcion que modifica los datos del jugador (Excepto el nombre, pq es primary key)
function modificarJugador($nuevoJugador, $fecha, $ncanastas, $nassistencias, $nrebotes, $position) {
    $con = conectar("basket");
    $update = "update player set nbaskets='$ncanastas', birth='$fecha', nassists='$nassistencias', nrebounds='$nrebotes', position='$position' where name='$nuevoJugador'";
    if (mysqli_query($con, $update)) {
        echo "Jugador modificado";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}
function modificarEquipoJugador($nuevoJugador, $equipo) {
    $con = conectar("basket");
    $update = "update player set team='$equipo' where name='$nuevoJugador'";
    if (mysqli_query($con, $update)) {
        echo "Jugador modificado";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

function borrarJugador($nuevoJugador){
    $con= conectar("basket");
    $delete = "delete from player where name='$nuevoJugador'";
    if (mysqli_query($con, $delete)) {
        echo "Jugador eliminado!";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

