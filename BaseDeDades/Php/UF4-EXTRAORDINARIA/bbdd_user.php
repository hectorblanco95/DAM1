<?php

require_once 'bbdd.php';

// Función que inserta un usuario en la bbdd
function insertPoints($name, $points, $game) {
    $con = conectar();
    $insert = "insert into play (`user`, `game`, `points`) values ('$name', '$points', '$game');";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que nos devuelve los users
// desde una posición y una cantidad determinada
function selectAllUsers($posicion) {
    $con = conectar();
    $select = "SELECT * FROM member LIMIT $posicion, 10;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que nos devuelve las actividades
// desde una posición y una cantidad determinada
function selectAllActivitys($posicion) {
    $con = conectar();
    $select = "SELECT * FROM activity LIMIT $posicion, 5;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve cuántos user hay en la bbdd
function totalUsers() {
    $con = conectar();
    $select = "select count(*) as cont from member;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve cuántos actividades hay en la bbdd
function totalActivitys() {
    $con = conectar();
    $select = "select count(*) as cont from activity;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve el id del miembro del user
function selectIdmember($name) {
    $con = conectar();
    $select = "select idmember from member where name='$name';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    $row = mysqli_fetch_row($resultado);
    desconectar($con);
    return $row[0];
}

// Función que devuelve los datos name, age del user
function userData($idmember) {
    $con = conectar();
    $select = "select name, age from member where idmember='$idmember';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que comprueba si un username ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existUser($name) {
    $con = conectar();
    $query = "select name from member where name='$name';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    // Comprobamos si la consulta ha devuelto algún resultado
    $num_rows = mysqli_num_rows($resultado);
    // Si el nº de filas es 0, no existe el usuario
    return $num_rows != 0;
}

// Función que inserta un usuario en la bbdd
function insertUser($pass, $name, $age) {
    $con = conectar();
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $insert = "insert into member (`pass`, `name`, `age`) values ('$passCif', '$name', '$age');";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que verifica si el login es correcto
function validateUser($idmember, $pass2) {
    $con = conectar();
    $query = "select pass from member where idmember='$idmember';";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    // Si hay fila user ok, sino user incorrecto
    if ($filas > 0) {
        // comprobamos si la contraseña es correcta
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($pass2, $pass);
    } else { // else que no hace faltaaa
        return false;
    }
}
?>