import java.io.*;
public class ex07 {
	//Escriure un programa en llenguatge Java on es demanin per teclat el nostre any de naixement i l’any actual. El programa haurà de calcular els anys que tenim i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un año de nacimiento");
			String año = buffer.readLine();
			System.out.println("Dame el año actual");
			String año2 = buffer.readLine();
			int año3 = Integer.parseInt(año);
			int año4 = Integer.parseInt(año2);
			System.out.println("La edad actual es= " + (año4-año3));

		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
