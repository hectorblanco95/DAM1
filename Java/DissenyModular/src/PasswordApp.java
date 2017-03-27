import java.io.*;
public class PasswordApp {

	public static void main (String[] args) throws NumberFormatException, IOException {
		BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce la longitud de la contraseña:");
		Password longitud = new Password (Integer.parseInt(buffer.readLine()));
		System.out.println(longitud.getContra());

	}
}