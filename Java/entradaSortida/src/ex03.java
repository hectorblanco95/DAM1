import java.io.BufferedReader;
import java.io.InputStreamReader;
public class ex03 {
//Escriure un programa en llenguatge Java on es demanin per teclat una base i una alçada d’un triangle. El programa haurà de calcular la seva àrea i el seu perímetre i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una base de un triangulo?");
			String base = buffer.readLine();
			System.out.println("Dame una alçada de un triangulo?");
			String alçada = buffer.readLine();
			int base2 = Integer.parseInt(base);
			int alçada2 = Integer.parseInt(alçada);
			System.out.println("Àrea es = " + (base2*alçada2/2));
			System.out.println("Perímetre es = " + (base2*3));
		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
