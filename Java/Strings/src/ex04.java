import java.io.*;
public class ex04 {
	//Escriure un programa en llenguatge Java on es demani una frase per teclat i es mostri per pantalla el nombre de caràcters que té aquella frase.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una palabra:");
			String a = buffer.readLine();

			int b = a.length();
			System.out.println("Return Value: " + b);

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
