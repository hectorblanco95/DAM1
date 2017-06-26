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
            $_SESSION["age"] = $age;
            // Guardamos los datos del username en variables de session
        }
        header("Location: home.php");
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
            $age = $_POST["age"];
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser($username, $pass, $name, $age);
            
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
                    $_SESSION["age"] = $age;
                    // Guardamos los datos del username en variables de session
                }
                header("Location: home.php");
            }  else 
                echo "<p>Usuario o contraseña incorrectos.</p>";
         }
    }
}
?>