import java.io.*;
public class ex10 {
	//Programa que llegeixi dos caràcters i comprovi si són dues lletres minúscules.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce una letra:");
			String a = buffer.readLine();
			System.out.println("Introduce otra letra:");
			String b = buffer.readLine();

			char c = a.charAt(0);
			char d = b.charAt(0);

			if (c > 'a' && c < 'z' && d > 'a' && d < 'z'){
				System.out.println("Son minuscula: " + c + " y " + d);
			} else{
				System.out.println("Son mayuscula: " + c + " y " + d);
			}

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
