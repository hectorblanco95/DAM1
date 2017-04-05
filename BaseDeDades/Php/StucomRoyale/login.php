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
         else 
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser($username, $pass);
        
    }
}
if (isset($_POST["modificarPass"])) {
    $username = $_SESSION["username"];
    $pass = $_POST["password"];
    // Comprobamos si existe una password con el mismo username
    if (existPass($username, $pass)) { // es lo mismo que existPass($username, $pass)==true
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["newPassword"];
        $veri = $_POST["newPassword2"];
        if ($pass != $veri) 
            echo "<p>Las contraseñas no coinciden. </p>";
         else {
            // Ya está todo ok!!!! Podemos modificar la password :)
            setPass($username, $pass);
            // Comprobamos el tipo para dirigir al user
            if ($_SESSION["tipo"] == 0) {
                // Dirigimos al usuario a su página
                header("Location: home_user.php");
            } else if ($_SESSION["tipo"] == 1) {
                header("Location: home_admin.php");
            }
        }
    } else{
        echo "<p>Contraseña incorrecta.</p>";
    }
}
if (isset($_POST["guardarUser"])) {
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
            $type = $_POST["tipo"];
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser2($username, $pass, $type);
        }
    }
}
if (isset($_POST["altaCard"])) {
    $name = $_POST["name"];
    // Comprobamos si existe una carta con el mismo nombre
    if (existName($name))  // es lo mismo que existName($name)==true
        echo "<p>Ya existe una carta con ese nombre.</p>";
     else {
        $type = strtolower($_POST["type"]);
        if($type!="tropa" && $type!="hechizo" && $type!="estructura")
            echo "<p>Tipo erroneo.</p>";
         else {
           $rarity = strtolower($_POST["rarity"]);
           if($rarity!="común" && $rarity!="comun" && $rarity!="especial" && $rarity!="épica" && $rarity!="epica" && $rarity!="legendaria")
            echo "<p>Calidad erroneo.</p>";
            else {
              $hitpoints = $_POST["hitpoints"];
              $damage = $_POST["damage"];
              $cost = $_POST["cost"];
        
              // Ya está todo ok!!!! Podemos dar de alta la carta :)
              insertCard($name, $type, $rarity, $hitpoints, $damage, $cost);
            }
        }
    }
}
?>

