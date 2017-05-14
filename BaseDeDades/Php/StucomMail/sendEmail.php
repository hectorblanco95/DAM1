<?php
// Abrimos sesión
session_start();
require_once 'bbdd_user.php';
if (isset($_POST["sendEmail"])) {
    $values = $_POST["usuario"];
    // Recogemos la date del servidor y lo insertamos en la bd
    $date = getdate();
    $fecha = $date['year']."-".$date['mon']."-".$date['mday']." ".$date['hours'].":".$date['minutes'].":".$date['seconds'];
    $asunto = $_POST["subject"];
    $mensaje = $_POST["message"];
    foreach ($values as $usuario){
        insertEmail($_SESSION["username"], $usuario, $fecha, $asunto, $mensaje);
    }
    insertDate($_SESSION["username"], $fecha);
    echo "Sent email.";
    // Comprobamos el tipo para dirigir al user
    if ($_SESSION["tipo"] == 0) 
        header("refresh:3;url=home_user.php");
     else if ($_SESSION["tipo"] == 1) 
        header("refresh:3;url=home_admin.php");
} 
?>