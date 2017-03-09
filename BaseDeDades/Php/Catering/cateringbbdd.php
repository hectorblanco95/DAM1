<?php

/* 
 * Fichero que incluirá todas las funciones relacionadas
 * con la base de datos
 */
 
// Función que modifica el precio del plato
function setPrecioPlatos($platos, $precio, $precioAntiguo) {
    $con = conectar("Catering");
    $update = "update plato set precio=$precio where idplato='$platos';";
    // Ejecutamos la consulta
    if (mysqli_query($con, $update)) {
        // Si ha ido bien
        if ($precioAntiguo<$precio){
            echo "Precio modificado! El plato ha subido " . ($precio-$precioAntiguo) . " €.";
        } else if ($precioAntiguo>$precio){
            echo "Precio modificado! El plato ha bajado " . ($precioAntiguo-$precio) . " €.";
        }
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
} 
 
// Función que recibe un dni y 
// borra la cocinero de la bbdd que tenga ese dni
function borrarCocinero($cocinero) {
    $con = conectar("Catering");
    $delete = "delete from cocinero where dni='$cocinero'";
    if (mysqli_query($con, $delete)) {
        echo "Cocinero borrada.";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}
  
// Función que devuelve todos los datos de todas los cocineros
function selectAllCocineros() {
    $con = conectar("Catering");
    $select = "select * from cocinero order by contrato, apellidos asc, nombre asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 

// Función que inserta un pedido en la bbdd
// Recibe todos sus datos como parámetro
function insertarPedido($nif, $idplato, $cantidad) {
    $con = conectar("Catering");
    $insert = "insert into pedir (`cliente`, `plato`, `cantidad`) values ('$nif', '$idplato', '$cantidad');";
    // Ejecutamos la consulta
    if (mysqli_query($con, $insert)) {
        // Si ha ido bien
        echo "Pedido dado de alta.";
    } else {
        // Sino mostramos el error
        echo mysqli_error($con);
    }
    desconectar($con);
}

// Función que devuelve todos los datos de todas los cocineros
function selectPlatos() {
    $con = conectar("Catering");
    $select = "select idplato, nombre, precio from plato order by nombre asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 

// Función que devuelve todos los datos de todas los cocineros
function selectClientes() {
    $con = conectar("Catering");
    $select = "select nif, nombre, apellidos from cliente order by nombre asc, apellidos asc;";
    // Ejecutamos la consulta y recogemos el resultado
    $resultado = mysqli_query($con, $select);
    desconectar($con);
    // devolvemos el resultado
    return $resultado;
} 

// Función para conectar con la bbdd
function conectar($database) {
    $con = mysqli_connect("localhost", "root", "", $database)
            or die("No se ha podido conectar con la BBDD.");
    return $con;
}

// Función que cierra la conexión con la bbdd
function desconectar($conexion) {
    mysqli_close($conexion);
}