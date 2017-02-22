import java.io.*;
public class ex02 {
	//Escriure un programa en llenguatge Java on es demanin per teclat dues variables. El programa haurà de sumar aquests dos nombres i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero?");
			String numero = buffer.readLine();
			System.out.println("Dame otro numero?");
			String numero2 = buffer.readLine();
			int numero3 = Integer.parseInt(numero);
			int numero4 = Integer.parseInt(numero2);
			System.out.println("La suma de los dos numeros es = " + (numero3+numero4));
		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
