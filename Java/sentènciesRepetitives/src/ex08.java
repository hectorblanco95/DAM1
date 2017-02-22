import java.io.*;
public class ex08 {
	//Escriure un programa en Java on es llegeixi un número per teclat, i mostri per pantalla tots els nombres imparells menors que ell mateix.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);

			for (int i=num; i>0; i--){
				if (i%2!=0){
					System.out.println(i);
				}
			}

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}