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
if (isset($_POST["submitTextarea"])) {
    $date = getdate();
    $fecha = $date['year']."-".$date['mon']."-".$date['mday']." ".$date['hours'].":".$date['minutes'].":".$date['seconds'];

    insertEmail($_POST["sender"], $_POST["receiver"], $fecha, $_POST["subject"], $_POST["textarea"]);
    echo "Sent email.";
    $id=$_POST["id"];
    $sender=$_POST['sender'];
    $receiver=$_POST['receiver'];
    $subject=$_POST['subject'];
    $date=$_POST['date'];
    // Comprobamos el tipo para dirigir al user
    if ($_SESSION["tipo"] == 0) 
        header("refresh:3;url=conversation_user.php?id=$id&sender=$sender&receiver=$receiver&subject=$subject&date=$date");
     else if ($_SESSION["tipo"] == 1) 
        header("refresh:3;url=conversation_admin.php?id=$id&sender=$sender&receiver=$receiver&subject=$subject&date=$date");
} 
?>