import java.io.*;
public class PasswordApp {

	public static void main (String[] args) throws NumberFormatException, IOException {
		BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
		
		System.out.println("Introduce cuantas contraseñas quieres:");
		int numC = Integer.parseInt(buffer.readLine());
		System.out.println("Introduce la longitud de las contraseñas:");
		int longituds = Integer.parseInt(buffer.readLine());

		Password[] passwords = new Password[numC];
		for (int i=0; i<numC; i++){
			Password p = new Password(longituds);
			passwords[i] = p;
			passwords[i].getContra();
			
			System.out.println(passwords[i].getContra() + " " + passwords[i].esFuerte());
		}
	}
}