<?php

/*
 * Fichero con los métodos para acceder a la bbdd
 */

// Función que conecta con BBDD
// Inserta un alumno con los valores que recibe como parámetros
// Cierra conexión con la bbdd
function insertarCocinero($nombre, $telefono, $sexo, $edad, $experiencia, $especialidad) {
    // Conectamos a la bbdd, si no conecta interrumpe el programa
    $conexion = conectar("restaurant");

// Tenemos la conexión con la BBDD :)
// Preparamos el insert
    $insert = "insert into cocinero 
         values('$nombre', '$telefono', '$sexo', $edad, $experiencia, '$especialidad')";
    // Insertamos en la bbdd
    if (mysqli_query($conexion, $insert)) {
        // Ha ido todo bien
        echo "Cocinero dado de alta<br>";
    } else {
        // Si hay error lo mostramos por pantalla
        echo mysqli_error($conexion);
    }
    // Desconectamos
    desconectar($conexion);
}

// Función que conecta con la bbdd que se pasa por 
// parámetro y devuelve la conexión
// Si hay error muestra msg de error y se interrumpe ejecución
function conectar($database) {
    $conexion = mysqli_connect("localhost", "root", "", $database)
            or die("No se ha podido conectar a la BBDD");
    return $conexion;
}

// Función que cierra la conexión con la bbdd
function desconectar($conexion) {
    mysqli_close($conexion);
}
