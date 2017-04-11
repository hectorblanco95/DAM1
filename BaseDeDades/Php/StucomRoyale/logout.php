<?php

session_start();

// Destruir todas las variables de sesión.
$_SESSION = array($_SESSION["username"],$_SESSION["tipo"]);

// Finalmente, destruir la sesión.
session_destroy();
header('Location: index.php');

?>

