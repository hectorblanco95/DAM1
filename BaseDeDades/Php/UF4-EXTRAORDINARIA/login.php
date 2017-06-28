<?php
// Abrimos sesión
session_start();
require_once 'bbdd_user.php';
if (isset($_POST["login-submit"])) {
    $idmember = $_POST["username"];
    $pass = $_POST["password"];
    if (validateUser($idmember, $pass)) {
        // Ole ole! el usuario ha hecho login
        // Guardamos el username en variables de session
        $_SESSION["idmember"] = $idmember;
        // Llamamos al método que devuelve todos los datos de los usuarios
        $userData = userData($_SESSION["idmember"]);
        // Leemos la fila y la mostramos
        $fila = mysqli_fetch_array($userData);
        extract($fila);
        // SIEMPRE después de un extract, las variables
        // tienen el nombre de los campos de la bbdd
        $_SESSION["name"] = $name;
        $_SESSION["age"] = $age;
        // Guardamos los datos del username en variables de session
        
        $_SESSION["idmember"]=selectIdmember($name);
        if($_SESSION["idmember"]==0){
            header("Location: home_admin.php");
        } else{
            header("Location: home_user.php");
        }
    }  else{
        echo "<p>Usuario o contraseña incorrectos.</p>";
        echo "<a href=index.php>Volver al Index</a>";
    }
} 
if (isset($_POST["register-submit"])) {
    $name = $_POST["username"];
    // Comprobamos si existe un usuario con el mismo username
    if (existUser($name)) { // es lo mismo que existUser($username)==true
        echo "<p>Ya existe un usuario con ese username.</p>";
        echo "<a href=index.php>Volver al Index</a>";
    } else {
        // Verificamos que la contraseña y la verificación son iguales
        $pass = $_POST["password"];
        $veri = $_POST["confirm-password"];
        if ($pass != $veri){
            echo "<p>Las contraseñas no coinciden. </p>";
            echo "<a href=index.php>Volver al Index</a>";
        }
         else{
            $age = $_POST["age"];
            // Ya está todo ok!!!! Podemos dar de alta el user :)
            insertUser($pass, $name, $age);
            
            $idmember=selectIdmember($name);
           
            echo "<p>Tu id de miembro es: $idmember, RECUERDALA!.</p>";
            echo "<a href=index.php>Volver al Index</a>";
            
            $_SESSION["idmember"]=$idmember;
         }
    }
}
?>