<?php
require_once 'bbdd_user.php';

if (isset($_POST["points"])) {
    $user = $_POST["user"];
    $idgame = $_POST["idgame"];
    $voto = $_POST["voto"];
    
    $con = conectar();
    $insert = "INSERT INTO play(`user`, `game`, `points`, `date`) VALUES('$user', $idgame, $voto, now());";
    if (mysqli_query($con, $insert)) {
        echo "Game puntuado!";
        header("refresh:3;url=home.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
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
if (isset($_POST["delete"])) {
    // Recogemos la variable del post
    $usuario = $_POST["usuario"];
    borrarUser($usuario);
}
?>