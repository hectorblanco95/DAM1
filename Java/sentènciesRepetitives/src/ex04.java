import java.io.*;
public class ex04 {
	//Escriure un programa en Java que mostri per pantalla 100 vegades el vostre nom (en el codi del vostre programa només ha d’aparèixer el vostre nom un cop).
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un nombre:");
			String a = buffer.readLine();

			for(int i=1; i<=100; i++){
				System.out.println(a);
			}
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
