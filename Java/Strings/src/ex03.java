import java.io.*;
public class ex03 {
	//Escriure un programa en llenguatge Java on es demani una frase per teclat, després es demani una altra frase per teclat, i es mostri per pantalla les dues frases juntes en una sola línia.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una palabra:");
			String a = buffer.readLine();
			System.out.println("Introduce otra palabra:");
			String b = buffer.readLine();

            a = a.concat(" " + b);
            System.out.println("Return Value: " + a);

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
