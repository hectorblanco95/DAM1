<?php

require_once 'bbdd.php';

// Función que devuelve username, wins, level de todos los usuarios menos el admin
function selectUser2() {
    $con = conectar("royal");
    $select = "select username, wins, level from user where type=0 order by level desc, wins desc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve username, wins, level de todos los usuarios
function selectUser() {
    $con = conectar("royal");
    $select = "select username, wins, level from user order by level desc, wins desc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve todos los datos de todos los usuarios
function selectAllUser() {
    $con = conectar("royal");
    $select = "select * from user order by username asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que cambia la password del usuario en la bbdd
function setPass($username, $pass) {
    $con = conectar("royal");
    $query = "UPDATE user SET password = '$pass' WHERE username = '$username';;";
    if (mysqli_query($con, $query)) {
        echo "Contraseña cambiada.";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que comprueba si una password ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existPass($username, $pass) {
    $con = conectar("royal");
    $query = "select password from user where username='$username' and password='$pass';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    // Comprobamos si la consulta ha devuelto algún resultado
    $num_rows = mysqli_num_rows($resultado);
    // Si el nº de filas es 0, no existe el usuario
    if ($num_rows == 0) {
        return false;
    } else { // este else no hace falta
        return true;
    }
}

// Función que comprueba si un username ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existUser($username) {
    $con = conectar("royal");
    $query = "select username from user where username='$username';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    // Comprobamos si la consulta ha devuelto algún resultado
    $num_rows = mysqli_num_rows($resultado);
    // Si el nº de filas es 0, no existe el usuario
    if ($num_rows == 0) {
        return false;
    } else { // este else no hace falta
        return true;
    }
}

// Función que recibe un username y 
// borra el usuario de la bbdd
function borrarUser($username) {
    $con = conectar("royal");
    $delete = "delete from user where username='$username';";
    if (mysqli_query($con, $delete)) {
        echo "Usuario borrada.";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que inserta un usuario en la bbdd
function insertUser2($username, $pass, $type) {
    $con = conectar("royal");
    $insert = "insert into user values ('$username', '$pass', '$type', 0, 1);";
    if (mysqli_query($con, $insert)) {
        header('Location: home_admin.php');
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que inserta un usuario en la bbdd (type: user)
function insertUser($username, $pass) {
    $con = conectar("royal");
    $insert = "insert into user values ('$username', '$pass', 0, 0, 1);";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que verifica si el login es correcto
function validateUser($username, $pass) {
    $con = conectar("royal");
    $query = "select * from user where username='$username' and password='$pass';";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    // Si hay fila user ok, sino user incorrecto
    if ($filas > 0) {
        return true;
    } else { // else que no hace faltaaa
        return false;
    }
}

// Función que devuelve el tipo de usuario 
// dado el username 
function getTypeByUsername($username) {
    $con = conectar("royal");
    $query = "select type from user where username='$username';";
    // Ejecutamos la consulta
    $resultado = mysqli_query($con, $query);
    // Extraemos el resultado
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    // Devolvemos el tipo de usuario
    return $type;
}

?>
