<?php

/*
 * Fichero con los métodos para acceder a la bbdd
 */

//Funcion que conecta la bbdd y devuelve
//el resultado de ejecutar select * from alumno
function selectAllAlumno() {
    //conectamos con la bbdd
    $conexion = conectar("escuela");
    //Ejecutamos la consulta recogiendo el resultado
    $resultado = mysqli_query($conexion, "select * from alumno");
    desconectar($conexion);
    return $resultado;
}


// Función que conecta con BBDD
// Inserta un alumno con los valores que recibe como parámetros
// Cierra conexión con la bbdd
function insertarAlumno($nombre, $edad, $ciudad, $tfno, $sexo) {
    // Conectamos a la bbdd, si no conecta interrumpe el programa
    $conexion = conectar("escuela");

// Tenemos la conexión con la BBDD :)
// Preparamos el insert
    $insert = "insert into alumno 
         values('$nombre', $edad, '$ciudad', '$tfno', '$sexo')";
    // Insertamos en la bbdd
    if (mysqli_query($conexion, $insert)) {
        // Ha ido todo bien
        echo "Alumno dado de alta<br>";
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
