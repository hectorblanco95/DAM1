<?php
require_once 'bbdd.php';

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
if (isset($_POST["delete"])) {
    // Recogemos la variable del post
    $idplay = $_POST["idplay"];
    
    $con = conectar();
    if (mysqli_query($con, "DELETE FROM play WHERE idplay = $idplay;")) {
        echo "Point deleted!";
        header("refresh:3;url=home.php");
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}
?>