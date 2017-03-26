<?php

$email = $_POST["email"];
$sexo = $_POST["sexo"];
$comida = $_POST["comida"];

echo "<p>Datos del usuario registrado en el formulario:</p>";
echo "<p>Email: $email Sexo: $sexo Comida:";
foreach ($comida as $selected) {
                echo $selected . ", ";
            };
?>