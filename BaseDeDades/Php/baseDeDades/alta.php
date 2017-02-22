<?php
//Recibimos los datos del formulario (POST)

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$ciudad = $_POST["ciudad"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];

//Conectamos a la bbdd, si no conecta interrumpe el programa
$conexion = mysqli_connect("localhost", "root", "", "escuela") or die ("No se ha podido conectar a la BBDD");
        

//Tenemos la conexión con BBDD :)
//Preparamos el insert
$insert = "insert into alumno values('$nombre', '$edad', '$ciudad', '$telefono', '$sexo');";

if (mysqli_query($conexion, $insert)){
    //Ha ido todo bien
    echo "Alumnos dado de alta<br>";
} else{
    //Si hay error lo mostramos por pantalla
    echo mysql_error($conexion);
}
        

