<?php

session_start();

// Destruir todas las variables de sesión.
$_SESSION = array($_SESSION["idmember"],$_SESSION["name"], $_SESSION["age"]); 

// Finalmente, destruir la sesión.
session_destroy();
header('Location: index.php');
?>