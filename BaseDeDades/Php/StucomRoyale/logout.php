<?php

session_start();

// Destruir todas las variables de sesión.
$_SESSION = array($_SESSION["username"],$_SESSION["tipo"], $_SESSION["level"], $_SESSION["wins"]); 

// Finalmente, destruir la sesión.
session_destroy();
header('Location: index.php');

?>

