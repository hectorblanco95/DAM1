import java.io.*;
public class ex06 {
	//Escriure un programa en llenguatge Java on es demani una frase per teclat i es mostri per pantalla amb tots els caràcters en lletra minúscula.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una palabra:");
			String a = buffer.readLine();

			String b = a.toLowerCase();		
			System.out.println("Return Value: " + b);

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
