import java.io.*;
public class ex07{
	//Escriure un programa en llenguatge Java on es demanin dos valors per teclat i determini si el primer valor és múltiple del segon. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String num = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num2 = buffer.readLine();


			int num3 = Integer.parseInt(num);
			int num4 = Integer.parseInt(num2);


			if (num3 % num4==0){
				System.out.println(num3 + " Es múltiple de " + num4);
			} else{
				System.out.println(num3 + " No es múltiple de " + num4);
			} 
		}


		catch (Exception e){

			System.out.println("Error");

		}	
	}
}