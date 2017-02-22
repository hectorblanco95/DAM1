import java.io.*;
public class ex01 {
	//Escriure un programa en llenguatge Java on es demani una paraula per teclat i es mostri per pantalla només la primera lletra de la paraula que ha introduït l’usuari.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una palabra:");
			String a = buffer.readLine();

			System.out.print("Return Value: ");
			System.out.println(a.substring(0,1));

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
