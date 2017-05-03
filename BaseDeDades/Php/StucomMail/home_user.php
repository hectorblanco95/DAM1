<!DOCTYPE html>
<!-- HomePage del user -->
<?php
// Antes de mostrar la página nos aseguramos que hay un usuario autentificado
session_start();
if (isset($_SESSION["user"])) {
    // Si hay variable user en session es que un usuario se ha validado
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Pagina del Usuario</title>
        </head>
        <body>
            <?php
            // Saludamos al usuario
            $email = $_SESSION["user"];
            echo "<h1>Bienvenido, $email</h1>";
            ?>
        </body>
    </html>
    <?php
} else {
    echo "<p>Debes hacer login para poder ver esta pagina</p>";
}
?>

