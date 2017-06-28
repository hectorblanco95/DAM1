<?php
// Función para conectar la bbdd
function conectar() {
    $con = mysqli_connect("localhost", "root", "", "gym")
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

// Función que cierra la conexión con la bbdd
function desconectar($conexion) {
    mysqli_close($conexion);
}
?>