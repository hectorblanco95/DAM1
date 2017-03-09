<?php
	require_once 'stukemonbbdd.php';
	if(isset($_POST['alta'])){ 
		$entrenador3 = $_POST['entrenador'];
		echo "<form action='mejorarVida3.php' method='POST'>";
	echo "Selecciona un pokemon: <select name='pokemon'><br>";
	$a = selectAllPokemon2($entrenador3);
	while($fila = mysqli_fetch_array($a)){
		extract($fila);
		echo "<option value='$name' value='$life'>$name <b>Vida:</b>$life</option>";
	}
	echo "</select>";
	echo "<input type='hidden' name='entrenador' value='$entrenador3'>";
	echo "<br><input type='submit' name='alta2' value='Finalizar!'>";
	echo "</form>";
	}else{
	echo "<form action='' method='POST'>";
	echo "Selecciona entrenador: <select name='entrenador'><br>";
	$a = selectAllEntrenadores3();
	while($fila = mysqli_fetch_array($a)){
		extract($fila);
		echo "<option value='$name' value='$potions'>Nombre: $name Pociones: $potions</option>";
	}
	echo "</select>";
	echo "<br><input type='submit' name='alta' value='Siguiente'>";
	echo "</form>";
	}
	?>