import java.io.*;
public class ex07 {
	//Escriure un programa en llenguatge Java on es demanin per teclat el nostre any de naixement i l�any actual. El programa haur� de calcular els anys que tenim i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un a�o de nacimiento");
			String a�o = buffer.readLine();
			System.out.println("Dame el a�o actual");
			String a�o2 = buffer.readLine();
			int a�o3 = Integer.parseInt(a�o);
			int a�o4 = Integer.parseInt(a�o2);
			System.out.println("La edad actual es= " + (a�o4-a�o3));

		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
