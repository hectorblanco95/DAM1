import java.io.BufferedReader;
import java.io.InputStreamReader;
public class ex03 {
//Escriure un programa en llenguatge Java on es demanin per teclat una base i una al�ada d�un triangle. El programa haur� de calcular la seva �rea i el seu per�metre i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una base de un triangulo?");
			String base = buffer.readLine();
			System.out.println("Dame una al�ada de un triangulo?");
			String al�ada = buffer.readLine();
			int base2 = Integer.parseInt(base);
			int al�ada2 = Integer.parseInt(al�ada);
			System.out.println("�rea es = " + (base2*al�ada2/2));
			System.out.println("Per�metre es = " + (base2*3));
		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
