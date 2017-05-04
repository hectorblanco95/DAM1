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
            $_SESSION["wins"] = $wins;
            $_SESSION["level"] = $level;
            // Guardamos los datos del username en variables de session
        }
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
                    $_SESSION["wins"] = $wins;
                    $_SESSION["level"] = $level;
                    // Guardamos los datos del username en variables de session
                }
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
    $name = ucfirst(strtolower($_POST["name"]));
    // Comprobamos si existe una carta con el mismo nombre
    if (existName($name))  // es lo mismo que existName($name)==true
        echo "<p>Ya existe una carta con ese nombre.</p>";
     else {
        $type = strtolower($_POST["type"]);
        $rarity = strtolower($_POST["rarity"]);
        $hitpoints = $_POST["hitpoints"];
        $damage = $_POST["damage"];
        $cost = $_POST["cost"];
        /*$target_dir = "https://workspace-hectorblanco95.c9users.io/BaseDeDades/Php/StucomRoyale/img/";
        $fotoperfil = $_FILES['image']['name']; 
        $ruta = $target_dir.$fotoperfil;

        $resultado = move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
              
              echo "Target_DIR: ".$target_dir."<br>";
            echo "Nom adjunt: ".$fotoperfil."<br>";
            echo "Ruta: ".$ruta."<br>";
            echo "Resultado: ".$resultado."<br>";*/
        
        // Ya está todo ok!!!! Podemos dar de alta la carta :)
        insertCard($name, $type, $rarity, $hitpoints, $damage, $cost, $ruta);
    }
}
if (isset($_POST["giveAwayCard"])) {
    $card = $_POST["card"];
    $user = $_POST["userName"];
    // Comprobamos si existe una carta con el mismo nombre
    if (existCard($user, $card)){  // es lo mismo que existName($name)==true
        echo "<p>El usuario ya tiene la carta en la baraja. La carta ha subido de nivel!</p>";
        header("refresh:4;url=home_admin.php");
    }else {
        // Ya está todo ok!!!! Podemos regalar la carta :)
        insertDeckUser($user, $card, selectImageCards($card));
        echo "Carta regalada :)";
        header("refresh:3;url=home_admin.php");
    }
}
if (isset($_POST["delete"])) {
    // Recogemos la variable del post
    $usuario = $_POST["usuario"];
    borrarUser($usuario);
}
?>

