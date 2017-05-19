<?php
// Abrimos sesión
session_start();
require_once 'bbdd_user.php';
if (isset($_POST["login-submit"])) {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    if (validateUser($username, $pass)) {
        // Ole ole! el usuario ha hecho login
        // Guardamos el username en variables de session
        $_SESSION["username"] = $username;
        // Llamamos al método que devuelve todos los datos de los usuarios
        $userData = userData($_SESSION["username"]);
        // Mientras haya datos, leemos la fila y la mostramos
        while ($fila = mysqli_fetch_array($userData)) {
            extract($fila);
            // SIEMPRE después de un extract, las variables
            // tienen el nombre de los campos de la bbdd
            $_SESSION["name"] = $name;
            $_SESSION["surname"] = $surname;
            // Guardamos los datos del username en variables de session
        }
        // Recogemos la date del servidor y lo insertamos en la bd
        $date = getdate();
        $fecha = $date['year']."-".$date['mon']."-".$date['mday']." ".$date['hours'].":".$date['minutes'].":".$date['seconds'];
        insertDate($_SESSION["username"], $fecha);
        // Comprobamos el tipo para dirigir al user
        $tipo = getTypeByUsername($username);
        // Guardamos el tipo de usuario en la variable de sesión
        $_SESSION["tipo"] = $tipo;
        if ($tipo == 0) 
            // Dirigimos al usuario a su página
            header("Location: home_user.php");
         else if ($tipo == 1) 
            header("Location: home_admin.php");
    }  else 
        echo "<p>Usuario o contraseña incorrectos.</p>";
} 
if (isset($_POST["register-submit"])) {
    $username = $_POST["username"];
    // Comprobamos si existe un usuario con el mismo username
    if (existUser($username)) { // es lo mismo que existUser($username)==true
        echo "<p>Ya existe un usuario con ese username.</p>";
    } else {
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["password"];
        $veri = $_POST["confirm-password"];
        if ($pass != $veri) 
            echo "<p>Las contraseñas no coinciden. </p>";
         else{
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser($username, $pass, $name, $surname);
            
            if (validateUser($username, $pass)) {
                // Ole ole! el usuario ha hecho login
                // Guardamos el username en variables de session
                $_SESSION["username"] = $username;
                // Llamamos al método que devuelve todos los datos de los usuarios
                $userData = userData($_SESSION["username"]);
                // Mientras haya datos, leemos la fila y la mostramos
                while ($fila = mysqli_fetch_array($userData)) {
                    extract($fila);
                    // SIEMPRE después de un extract, las variables
                    // tienen el nombre de los campos de la bbdd
                    $_SESSION["name"] = $name;
                    $_SESSION["surname"] = $surname;
                    // Guardamos los datos del username en variables de session
                }
                // Recogemos la date del servidor y lo insertamos en la bd
                $date = getdate();
                $fecha = $date['year']."-".$date['mon']."-".$date['mday']." ".$date['hours'].":".$date['minutes'].":".$date['seconds'];
                insertDate($_SESSION["username"], $fecha);
                // Comprobamos el tipo para dirigir al user
                $tipo = getTypeByUsername($username);
                // Guardamos el tipo de usuario en la variable de sesión
                $_SESSION["tipo"] = $tipo;
                if ($tipo == 0) 
                    // Dirigimos al usuario a su página
                    header("Location: home_user.php");
                 else if ($tipo == 1) 
                    header("Location: home_admin.php");
            }  else 
                echo "<p>Usuario o contraseña incorrectos.</p>";
         }
    }
}
if (isset($_POST["change-pass"])) {
    $username = $_SESSION["username"];
    $pass = $_POST["password"];
    // Comprobamos si existe una password con el mismo username
    if (validateUser($username, $pass)) { 
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["newPassword"];
        $veri = $_POST["newPassword2"];
        if ($pass != $veri) 
            echo "<p>Las contraseñas no coinciden. </p>";
         else {
            // Ya está todo ok!!!! Podemos modificar la password :)
            setPass($username, $pass);
        }
    } else{
        echo "<p>Contraseña incorrecta.</p>";
    }
}
if (isset($_POST["saveUser"])) {
    $username = $_POST["username"];
    // Comprobamos si existe un usuario con el mismo username
    if (existUser($username))  // es lo mismo que existUser($username)==true
        echo "<p>Ya existe un usuario con ese username.</p>";
     else {
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["password"];
        $veri = $_POST["confirm-password"];
        if ($pass != $veri) {
            echo "<p>Las contraseñas no coinciden. </p>";
        } else {
            $type = $_POST["name"];
            $type = $_POST["surname"];
            $type = $_POST["tipo"];
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser2($username, $pass, $name, $surname, $type);
        }
    }
}
if (isset($_POST["delete"])) {
    // Recogemos la variable del post
    $usuario = $_POST["usuario"];
    borrarUser($usuario);
}
if (isset($_POST["lastLogin"])) {
    $lastLogin=$_POST["usuario"];
    header("Location: lastLogin.php?lastLogin=$lastLogin");
}
?>