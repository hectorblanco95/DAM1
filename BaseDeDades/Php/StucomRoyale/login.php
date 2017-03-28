<?php
// Abrimos sesión
session_start();
require_once 'bbdd_user.php';
if (isset($_POST["login-submit"])) {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    if (validateUser($username, $pass)) {
        // Ole ole! el usuario ha hecho login
        // Guardamos el username en una variable de session
        $_SESSION["username"] = $username;
        $_SESSION["level"] = $level;
        // Comprobamos el tipo para dirigir al user
        $tipo = getTypeByUsername($username);
        // Guardamos el tipo de usuario en la variable de sesión
        $_SESSION["tipo"] = $tipo;
        if ($tipo == 0) {
            // Dirigimos al usuario a su página
            header("Location: home_user.php");
        } else if ($tipo == 1) {
            header("Location: home_admin.php");
        }
    }  else {
        echo "<p>Usuario o contraseña incorrectos.</p>";
    } 
} if (isset($_POST["register-submit"])) {
            $username = $_POST["username"];
            // Comprobamos si existe un usuario con el mismo username
            if (existUser($username)) { // es lo mismo que existUser($username)==true
                echo "<p>Ya existe un usuario con ese username.</p>";
            } else {
                // Verificamos que la contraseña y la verificación son iguales
                $pass = $_POST["password"];
                $veri = $_POST["confirm-password"];
                if ($pass != $veri) {
                    echo "<p>Las contraseñas no coinciden. </p>";
                } else {
                    // Ya está todo ok!!!! Podemos dar de alta el user :)
                    insertUser($username, $pass);
                }
            }
        }
?>

