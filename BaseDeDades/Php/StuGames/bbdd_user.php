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

// Función que nos devuelve los games no votados
// desde una posición y una cantidad determinada
function selectGamesNoVotados($username, $posicion) {
    $con = conectar();
    $select = "SELECT idgame, `tittle`, price, `genre` FROM game WHERE idgame NOT IN(SELECT game FROM play WHERE user = '$username')
                LIMIT $posicion, 3;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve cuántos games no votados hay en la bbdd
function totalGames($username) {
    $con = conectar();
    $select = "SELECT COUNT(*) as cont FROM game WHERE idgame NOT IN(SELECT game FROM play WHERE user = '$username');";
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
        header("refresh:3;");
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