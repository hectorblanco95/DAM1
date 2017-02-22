import java.io.*;
public class piedraPapelTijeras {
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame piedra, papel o, tijera:");
			String jug1 = buffer.readLine();
			System.out.println("Dame piedra, papel o, tijera:");
			String jug2 = buffer.readLine();

			if (jug1 .equals("piedra") && jug2 .equals ("piedra")){
				System.out.println(jug1 + " + " + jug2 + " = Empate");
			} else if (jug1 .equals("papel") && jug2 .equals ("papel")){
				System.out.println(jug1 + " + " + jug2 + " = Empate");
			} else if (jug1 .equals("tijera") && jug2 .equals ("tijera")){
				System.out.println(jug1 + " + " + jug2 + " = Empate");
			} else if (jug1 .equals("piedra") && jug2 .equals ("papel")){
				System.out.println(jug1 + " + " + jug2 + " = Gana jugador 1");
			} else if (jug1 .equals("papel") && jug2 .equals ("piedra")){
				System.out.println(jug1 + " + " + jug2 + " = Gana jugador 2");
			} else if (jug1 .equals("papel") && jug2 .equals ("tijera")){
				System.out.println(jug1 + " + " + jug2 + " = Gana jugador 2");
			} else if (jug1 .equals("tijera") && jug2 .equals ("papel")){
				System.out.println(jug1 + " + " + jug2 + " = Gana jugador 1");
			} else if (jug1 .equals("piedra") && jug2 .equals ("tijera")){
				System.out.println(jug1 + " + " + jug2 + " = Gana jugador 1");
			} else if (jug1 .equals("tijera") && jug2 .equals ("piedra")){
				System.out.println(jug1 + " + " + jug2 + " = Gana jugador 2");
			} else{
				System.out.println("Caracter incorrecto, reinicie el juego");
			}

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}