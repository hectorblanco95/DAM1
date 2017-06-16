<?php

require_once 'bbdd.php';

// Función que inserta un usuario en la bbdd
function insertPoints($username, $points, $game) {
    $con = conectar();
    $insert = "insert into play (`user`, `game`, `points`) values ('$username', '$points', '$game');";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que nos devuelve el id games
function selectIdGames($gamesNoVotados) {
    $con = conectar();
    $select = "select idgame from game where idgame='$gamesNoVotados';";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return array($idgame);
}

// Función que nos devuelve los games
// desde una posición y una cantidad determinada
function selectGamesNoVotados() {
    $con = conectar();
    $select = "select game from play;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que nos devuelve los games
// desde una posición y una cantidad determinada
function selectGames($idsNoVotados, $posicion, $cantidad) {
    $con = conectar();
    $select = "select idgame, `tittle`, price, `genre` from game where idgame <> '$idsNoVotados' desc limit $posicion, $cantidad;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve cuántos games hay en la bbdd
function totalGames() {
    $con = conectar();
    $select = "select count(*) as cont from game;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve los datos name, surname del user
function userData($username) {
    $con = conectar();
    $select = "select name, age from user where username='$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que cambia la password del usuario en la bbdd
function setPass($username, $pass) {
    $con = conectar();
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $query = "UPDATE user SET pass = '$passCif' WHERE username = '$username';;";
    if (mysqli_query($con, $query)) {
        echo "Contraseña modificada.";
        header("refresh:3;url=home.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que comprueba si un username ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existUser($username) {
    $con = conectar();
    $query = "select username from user where username='$username';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    // Comprobamos si la consulta ha devuelto algún resultado
    $num_rows = mysqli_num_rows($resultado);
    // Si el nº de filas es 0, no existe el usuario
    return $num_rows != 0;
}

// Función que recibe un username y 
// borra el usuario de la bbdd
function borrarUser($usuario) {
    $con = conectar();
    $delete = "delete from user where username='$usuario';";
    if (mysqli_query($con, $delete)) {
        echo "Usuario borrado.";
        header("refresh:3;url=home.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que inserta un usuario en la bbdd
function insertUser($username, $pass, $name, $age) {
    $con = conectar();
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $insert = "insert into user values ('$username', '$passCif', '$name', '$age');";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que verifica si el login es correcto
function validateUser($username, $pass2) {
    $con = conectar();
    $query = "select pass from user where username='$username';";
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