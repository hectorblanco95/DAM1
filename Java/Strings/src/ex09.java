import java.io.*;
public class ex09 {
	//Programa que llegeixi dos caràcters per teclat i comprovi si són iguals.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una letra:");
			String a = buffer.readLine();
			System.out.println("Introduce otra letra:");
			String b = buffer.readLine();

			char c = a.charAt(0);
			char d = b.charAt(0);

			if (c==d){
				System.out.println(c + " es igual: " + d);
			} else{
				System.out.println(c + " no es igual: " + d);
			}

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
