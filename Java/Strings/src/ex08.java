import java.io.*;
public class ex08 {
	//Programa que llegeixi un car�cter per teclat i comprovi si �s una lletra maj�scula.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una letra:");
			String a = buffer.readLine();

			char b = a.charAt(0);

			if (b > 'A' && b < 'Z'){
				System.out.println("Es mayuscula: " + b);
			} else{
				System.out.println("Es minuscula: " + b);
			}

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
