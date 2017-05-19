<?php

require_once 'bbdd.php';

// Función que devuelve cuántos users hay en la bbdd
function totalUsers() {
    $con = conectar("msg");
    $select = "select count(*) as cont from user;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve el ranking de los mensajes de todos los usuarios
function ranking() {
    $con = conectar("msg");
    $select = "SELECT username, name, type, COUNT(*) AS cont FROM user INNER JOIN message ON user.username = message.sender GROUP BY sender ORDER BY cont DESC;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve el username, lastLogin, y el type de todos los usuarios
function selectLastLogin($username) {
    $con = conectar("msg");
    $select = "select user, MAX(date) as date, type from event where user='$username' and type='I';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve cuántos emails hay sin leer en la bbdd
function contUnread2() {
    $con = conectar("msg");
    $select = "select count(*) as cont from message where `read` = 0;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve cuántos emails hay sin leer del user en la bbdd
function contUnread($username) {
    $con = conectar("msg");
    $select = "select count(*) as cont from message where `read` = 0 and receiver= '$username';";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve los mensajes que hay en el correo seleccionado
function chat($sender, $receiver, $subject, $date) {
    $con = conectar("msg");
    $select = "select sender, date, body from message where sender='$sender' and receiver='$receiver' and subject='$subject' and date='$date' order by date asc;";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve el mensajes del correo seleccionado
function selectBodyMessage($id) {
    $con = conectar("msg");
    $select = "select body from message where idmessage=$id;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_assoc($resultado);
    desconectar($con);
    return $fila["body"];
}

// Función que cambia la password del usuario en la bbdd
function setRead($id) {
    $con = conectar("msg");
    $query = "UPDATE message SET `read` = 1 WHERE idmessage = $id;";
    if (mysqli_query($con, $query)) ;
     else 
        echo mysqli_error($con);
    desconectar($con);
}

// Función que devuelve cuántos emails hay en la bbdd
function totalEmailsBd() {
    $con = conectar("msg");
    $select = "select count(*) as cont from message;";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que nos devuelve los emails
// desde una posición y una cantidad determinada
function selectEmailsBd($posicion, $cantidad) {
    $con = conectar("msg");
    $select = "select * from message order by date desc limit $posicion, $cantidad";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que devuelve cuántos emails hay en la bbdd
function totalEmailsSent($username) {
    $con = conectar("msg");
    $select = "select count(*) as cont from message where sender='$username';";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que devuelve cuántos emails hay en la bbdd
function totalEmails($username) {
    $con = conectar("msg");
    $select = "select count(*) as cont from message where receiver='$username';";
    $resultado = mysqli_query($con, $select);
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $cont;
}

// Función que nos devuelve los emails enviados
// desde una posición y una cantidad determinada
function selectEmailsSent($username, $posicion, $cantidad) {
    $con = conectar("msg");
    $select = "select idmessage, receiver, date, `read`, subject from message where sender='$username' order by date desc limit $posicion, $cantidad";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que nos devuelve los emails
// desde una posición y una cantidad determinada
function selectEmails($username, $posicion, $cantidad) {
    $con = conectar("msg");
    $select = "select idmessage, sender, receiver, date, `read`, subject from message where receiver='$username' order by date desc limit $posicion, $cantidad";
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    return $resultado;
}

// Función que inserta el email en la bbdd
function insertEmail($sender, $receiver, $fecha, $asunto, $mensaje) {
    $con = conectar("msg");
    $insert = "insert into message (`sender`, `receiver`, `date`, `read`, `subject`, `body`) values ('$sender', '$receiver', '$fecha', 0, '$asunto', '$mensaje');";
    if (mysqli_query($con, $insert));
     else 
        echo mysqli_error($con);
    desconectar($con);
}

// Función que inserta la date del servidor en la tabla event de la bbdd
function insertDate($username, $fecha) {
    $con = conectar("msg");
    if (isset($_POST["login-submit"]))
        $insert = "insert into event (`user`, `date`, `type`) values ('$username', '$fecha', 'I');";
    if (isset($_POST["sendEmail"]))
        $insert = "insert into event (`user`, `date`, `type`) values ('$username', '$fecha', 'R');";
    if (isset($_GET["read"]))
        $insert = "insert into event (`user`, `date`, `type`) values ('$username', '$fecha', 'C');";
    if (mysqli_query($con, $insert));
     else 
        echo mysqli_error($con);
    desconectar($con);
}

// Función que devuelve los datos name, surname del user
function userData($username) {
    $con = conectar("msg");
    $select = "select name, surname from user where username='$username';";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que devuelve el username, el name, el surname y el type de todos los usuarios
function selectUsernameUsers() {
    $con = conectar("msg");
    $select = "select username, name, surname, type from user order by username asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
}

// Función que cambia la password del usuario en la bbdd
function setPass($username, $pass) {
    $con = conectar("msg");
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $query = "UPDATE user SET password = '$passCif' WHERE username = '$username';;";
    if (mysqli_query($con, $query)) {
        echo "Contraseña modificada.";
        // Comprobamos el tipo para dirigir al user
        if ($_SESSION["tipo"] == 0) 
            header("refresh:3;url=home_user.php");
         else if ($_SESSION["tipo"] == 1) 
            header("refresh:3;url=home_admin.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
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
    return $num_rows != 0;
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

// Función que el admin inserta un usuario en la bbdd
function insertUser2($username, $pass, $name, $surname, $type) {
    $con = conectar("msg");
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $insert = "insert into user values ('$username', '$passCif', '$name', '$surname', $type);";
    if (mysqli_query($con, $insert)) {
        echo "Usuario registrado.";
        header("refresh:3;url=home_admin.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que inserta un usuario en la bbdd (type: user)
function insertUser($username, $pass, $name, $surname) {
    $con = conectar("msg");
    $passCif = password_hash($pass, PASSWORD_DEFAULT);
    $insert = "insert into user values ('$username', '$passCif', '$name', '$surname', 0);";
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
    $query = "select password from user where username='$username'";
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