import java.io.*;
public class ex05{
	//Escriure un programa en llenguatge Java on es demanin 5 notes d’un alumne per teclat i determini si hi ha alguna nota suspesa. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un nota:");
			String num = buffer.readLine();
			System.out.println("Dame otro nota:");
			String num2 = buffer.readLine();
			System.out.println("Dame otro nota:");
			String num3 = buffer.readLine();
			System.out.println("Dame otro nota:");
			String num4 = buffer.readLine();
			System.out.println("Dame otro nota:");
			String num5 = buffer.readLine();



			int num6 = Integer.parseInt(num);
			int num7 = Integer.parseInt(num2);
			int num8 = Integer.parseInt(num3);
			int num9 = Integer.parseInt(num4);
			int num10 = Integer.parseInt(num5);



			if (num6>4){
				System.out.println(num6 + " Aprobado");
			} else{
				System.out.println(num6 + " Suspendido");
			} if (num7>4){
				System.out.println(num7 + " Aprobado");
			} else{
				System.out.println(num7 + " Suspendido");
			} if (num8>4){
				System.out.println(num8 + " Aprobado");
			} else{
				System.out.println(num8 + " Suspendido");
			} if (num9>4){
				System.out.println(num9 + " Aprobado");
			} else{
				System.out.println(num9 + " Suspendido");
			} if (num10>4){
				System.out.println(num10 + " Aprobado");
			} else{
				System.out.println(num10 + " Suspendido");
			}
		}


		catch (Exception e){

			System.out.println("Error");

		}	
	}
}