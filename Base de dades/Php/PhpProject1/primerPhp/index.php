<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>

		<?php
			echo "hello world :) <br/>";
			echo 'Vamos a empezar a hacer cositas... <br>';

			$numero1 = 5;
			$numero2 = 8;
			$numero1++;
			$numero1 +=10;
			echo "El primer numero vale $numero1 <br/>";
			echo "El segundo numero vale $numero2 <br/>";
			$suma = $numero1 + $numero2;
			echo "El resultado de la suma es: $suma <br/>";
			$resta = $numero1 - $numero2;
			echo "El resultado de la resta es: $resta <br/>";
			$multiplicacion = $numero1 * $numero2;
			echo "El resultado de la multiplicacion es: $multiplicacion <br/>";
			$division = $numero1 / $numero2;
			echo "El resultado de la division es: $division <br/>";
			$resto = $numero1 % $numero2;
			echo "Y el resto es: $resto <br/>";
			echo "<br><hr>"; //salto de linea, con barra
			//condicionales
			$edad = 24;
			if ($edad > 18) {
				echo "Ya eres adulto! <br/>";
			} else if ($edad ==18) {
				echo "Justo acabas de estrenar tu mayoria de edad <br>";
			} else {
				echo "Eres menor de edad <br>";
			}
			//Escala de edades
			if ($edad <6) {
				echo "Eres mu chiquitito <br>";
			} else if ($edad >= 6 && $edad<13) {
				echo "Eres un chavalin <br>";
			} else if ($edad>13 && $edad<24){
				echo "Quien te va aguantar!! Eres adolescente!!<br>";
			} else if ($edad==13 || $edad==24){
				echo "Estás en en el umbral de la adolescenciaaa<br>";
			} else if ($edad>24 && $edad < 50) {
				echo "Estas en la flor de la vida <br>";
			} else {
				echo "Hay que empezar a cuidarse...<br>";-                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         -  
			}

			
			//Ejemplo:en la variable tenemos el nº de dia y
			//devolvemos el nombre del dia de la semana al que corresponde
			//1 - lunes, 2 - martes, etc..
			//Variables del nº de dia


			$dia=4;

			switch ($dia){
				case 1:
				echo "Lunes<br>";
				break;
				case 2:
				echo "Martes<br>";
				break;
				case 3:
				echo "Miercoles<br>";
				break;
				case 4:
				echo "Jueves<br>";
				break;
				case 5:
				echo "Viernes<br>";
				break;
				case 6:
				echo "Sabado<br>";
				breack;
				case 7:
				echo "Domingo<br>";
				breack;
				default;
				echo "Numero de la semana incorrecto<br>";



			}

		?>
	</body>
</html>