<?php

/* 
 * Eliminar los datos de un jugador
 */

require_once 'bbdd.php';

$name=$_POST['player'];
borrarJugador($name);