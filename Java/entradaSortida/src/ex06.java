import java.io.*;
public class ex06 {
	//Escriure un programa en llenguatge Java on es demanin per teclat cinc notes (poden tenir decimals). El programa haurà de calcular la seva nota mitja i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una nota?");
			String nota = buffer.readLine();
			System.out.println("Dame otro nota?");
			String nota2 = buffer.readLine();
			System.out.println("Dame una nota?");
			String nota3 = buffer.readLine();
			System.out.println("Dame otro nota?");
			String nota4 = buffer.readLine();
			System.out.println("Dame otro nota?");
			String nota5 = buffer.readLine();
			double nota6 = Double.parseDouble(nota);
			double nota7 = Double.parseDouble(nota2);
			double nota8 = Double.parseDouble(nota3);
			double nota9 = Double.parseDouble(nota4);
			double nota10 = Double.parseDouble(nota5);
			System.out.println("La seva nota mitja es= " + ((nota6+nota7+nota8+nota9+nota10)/5));

		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}

