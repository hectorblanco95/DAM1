import java.io.*;
public class ex02 {
	//Escriure un programa en llenguatge Java on es demani una paraula per teclat, després es demani una altra paraula per teclat, i es mostri per pantalla si les dues paraules escrites per l’usuari són iguals.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una palabra:");
			String a = buffer.readLine();
			System.out.println("Introduce otra palabra:");
			String b = buffer.readLine();
			
			int compare=0;

			compare=(a.compareTo(b));
			System.out.println("Return Value: " + compare);
			
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
