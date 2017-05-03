<?php

require_once 'bbdd.php';

// Función que comprueba si la card ya existe en la tabla deck
// Devuelve true si existe, false si no existe
function existCard($user, $card) {
    $con = conectar("msg");
    $query = "select card from deck where user='$user' and card='$card';";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    // Comprobamos si la consulta ha devuelto algún resultado
    $num_rows = mysqli_num_rows($resultado);
    // Si el nº de filas es 0, no existe el usuario
    if ($num_rows == 0) {
        return false;
    } else { // Funcion que sube el nivel de la carta
        $con = conectar("msg");
        $update = "UPDATE deck SET `level`=level+1 WHERE user='$user' and card='$card';";
        if (mysqli_query($con, $update));
        else {
        echo mysqli_error($con);
        }
        desconectar($con);
        return true;
    }
}

// Función que inserta un usuario en la bbdd (type: user)
function insertDeckUser($username, $nameCard, $image) {
    $con = conectar("msg");
    $insert = "insert into deck values ('$username', '$nameCard', 1, '$image');";
    if (mysqli_query($con, $insert));
    else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que devuelve todos los datos de las cartas con ese nombre
function cardData($card) {
    $con = conectar("msg");
    $select = "select type, rarity, hitpoints, damage, cost from card where name='$card';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve todos las cartas conseguidas por el user
function deckUser($username) {
    $con = conectar("msg");
    $select = "select card, level, Image from deck where user='$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve los datos wins, level del user
function userData($username) {
    $con = conectar("msg");
    $select = "select wins, level from user where username='$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve username, wins, level de todos los usuarios menos el admin
function selectUser2() {
    $con = conectar("msg");
    $select = "select username, wins, level from user where type=0 order by level desc, wins desc limit 0 , 10;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve username, wins, level de 10 usuarios
function selectUser() {
    $con = conectar("msg");
    $select = "select username, wins, level from user order by level desc, wins desc limit 0 , 10;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve las imagenes de las cartas de la bbdd
function selectImageCards2() {
    $con = conectar("msg");
    $select = "select name from card order by name asc";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve las imagenes del nombre seleccionado de las cartas de la bbdd
function selectImageCards($nameCard) {
    $con = conectar("msg");
    $select = "select Image from card where name='$nameCard';";
    // Ejecutamos la consulta
    $resultado = mysqli_query($con, $select);
    // Extraemos el resultado
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    // Devolvemos la image
    return $Image;
}

// Función que devuelve los nombres de las cartas de la bbdd
function selectNameCards() {
    $con = conectar("msg");
    $select = "select name from card order by name asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve todos los datos de todos las cartas
function selectAllCards() {
    $con = conectar("msg");
    $select = "select * from card order by name asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve todos los datos de todos los usuarios
function selectAllUser() {
    $con = conectar("msg");
    $select = "select * from user order by username asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que cambia la password del usuario en la bbdd
function setPass($username, $pass) {
    $con = conectar("msg");
    $query = "UPDATE user SET password = '$pass' WHERE username = '$username';;";
    if (mysqli_query($con, $query)) {
        // Comprobamos el tipo para dirigir al user
        if ($_SESSION["tipo"] == 0) {
            // Dirigimos al usuario a su página
            echo "Contraseña modificada.";
            header("refresh:3;url=home_user.php");
        } else if ($_SESSION["tipo"] == 1) {
            echo "Contraseña modificada.";
            header("refresh:3;url=home_admin.php");
        }
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que comprueba si una password ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existPass($username, $pass) {
    $con = conectar("msg");
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

// Función que comprueba si la card ya existe en la bbdd
// Devuelve true si existe, false si no existe
function existName($name) {
    $con = conectar("msg");
    $query = "select name from card where name='$name';";
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
    $con = conectar("msg");
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
function borrarUser($usuario) {
    $con = conectar("msg");
    $delete = "delete from user where username='$usuario';";
    if (mysqli_query($con, $delete)) {
        echo "Usuario borrado.";
        header("refresh:3;url=home_admin.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que el admin inserta una carta en la bbdd
function insertCard($name, $type, $rarity, $hitpoints, $damage, $cost, $ruta) {
    $con = conectar("msg");
    $insert = "insert into card values ('$name', '$type', '$rarity', $hitpoints, $damage, $cost, '$ruta');";
    if (mysqli_query($con, $insert)) {
        echo "Carta registrada.";
        header("refresh:3;url=altaDeCartas.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que el admin inserta un usuario en la bbdd
function insertUser2($username, $pass, $type) {
    $con = conectar("msg");
    $insert = "insert into user values ('$username', '$pass', '$type', 0, 1);";
    if (mysqli_query($con, $insert)) {
        echo "Usuario registrado.";
        header("refresh:3;url=home_admin.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que inserta un usuario en la bbdd (type: user)
function insertUser($username, $pass) {
    $con = conectar("msg");
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $insert = "insert into user values ('$username', '$passCif', 0, 0, 1);";
    if (mysqli_query($con, $insert)) {
        echo "<p>Usuario registrado </p>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
} 

// Función que verifica si el login es correcto
function validateUser($username, $pass) {
    $con = conectar("msg");
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
// dado el username 
function getTypeByUsername($username) {
    $con = conectar("msg");
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
