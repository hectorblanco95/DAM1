import java.io.*;
public class ex06{
	//Escriure un programa en llenguatge Java on es demanin 5 valors per teclat i determini si hi ha algun valor que �s m�ltiple de 3. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String num = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num2 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num3 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num4 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num5 = buffer.readLine();



			int num6 = Integer.parseInt(num);
			int num7 = Integer.parseInt(num2);
			int num8 = Integer.parseInt(num3);
			int num9 = Integer.parseInt(num4);
			int num10 = Integer.parseInt(num5);



			if (num6 % 3==0){
				System.out.println(num6 + " Es m�ltiple de 3");
			} else{
				System.out.println(num6 + " No es m�ltiple de 3");
			} if (num7 % 3==0){
				System.out.println(num7 + " Es m�ltiple de 3");
			} else{
				System.out.println(num7 + " No es m�ltiple de 3");
			} if (num8 % 3==0){
				System.out.println(num8 + " Es m�ltiple de 3");
			} else{
				System.out.println(num8 + " No es m�ltiple de 3");
			} if (num9 % 3==0){
				System.out.println(num9 + " Es m�ltiple de 3");
			} else{
				System.out.println(num9 + " No es m�ltiple de 3");
			} if (num10 % 3==0){
				System.out.println(num10 + " Es m�ltiple de 3");
			} else{
				System.out.println(num10 + " No es m�ltiple de 3");
			}
		}


		catch (Exception e){

			System.out.println("Error");

		}	
	}
}