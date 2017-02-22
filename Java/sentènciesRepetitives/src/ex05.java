import java.io.*;
public class ex05 {
	//Escriure un programa en Java on es demani un número per teclat. El programa haurà de d’avaluar si el número introduït és primer o no.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);

			if (num%1==0 && num%-1==0 && num%num==0 && num%(-num)==0){
				System.out.println("Es primo");
			} else{
				System.out.println("No es primo");
			}

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
