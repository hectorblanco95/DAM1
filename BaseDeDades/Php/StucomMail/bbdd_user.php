<?php

require_once 'bbdd.php';

// Función que devuelve cuántos juegos hay en la bbdd
function totalGames() {
    $con = conectar("dam_steam");
    $select = "select count(*) as cont from game;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}


// Función que nos devuelve los juegos
// desde una posición y una cantidad determinada
function selectGames($posicion, $cantidad) {
    $con = conectar("dam_steam");
    $select = "select * from game limit $posicion, $cantidad";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que comprueba si un email ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existUser($email) {
    $con = conectar("dam_steam");
    $query = "select email from user where email='$email'";
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

// Función que inserta un usuario en la bbdd (type: user)
function insertUser($email, $pass, $name) {
    $con = conectar("dam_steam");
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $insert = "insert into user values 
             ('$email', '$passCif', '$name',  'user')";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que verifica si el login es correcto
function validateUser($email, $pass) {
    $con = conectar("dam_steam");
    $query = "select password from user where email='$email'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    // Si hay fila user ok, sino user incorrecto
    if ($filas > 0) {
        // comprobamos si la contraseña es correcta
        $fila = mysqli_fetch_array($resultado);
        extract($fila);
        return password_verify($pass, $password);
    } else { // else que no hace faltaaa
        return false;
    }
}

// Función que devuelve el tipo de usuario 
// dado el email 
function getTypeByEmail($email) {
    $con = conectar("dam_steam");
    $query = "select type from user where email='$email'";
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
