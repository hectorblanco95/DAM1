<?php
session_start();
if (isset($_SESSION["user"])) {
    // Nos aseguramos que el usuario sea administrador
    // Cogemos el tipo de la variable de sesión
    $tipo = $_SESSION["tipo"];
    if ($tipo == "admin") {
        ?>
        <!DOCTYPE html>
        <!-- Página principal del usuario admin -->
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Home Page Administrator</title>
            </head>
            <body>
                <h1>Bienvenido Administrador</h1>

            </body>
        </html>
        <?php
    } else {
        echo "<p>No tienes permisos para ver esta página.</p>";
    }
} else {
    echo "<p>No hay usuario validado</p>";
}
?>
