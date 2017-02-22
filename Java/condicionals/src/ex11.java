import java.io.*;
public class ex11{
	//Escriure un programa en llenguatge Java on es demani per teclat tres valors enters i calculi quin és el nombre màxim dels tres. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String num = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num2 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num3 = buffer.readLine();

			int num4 = Integer.parseInt(num);
			int num5 = Integer.parseInt(num2);
			int num6 = Integer.parseInt(num3);


			if (num4>num5 && num5>num6){				
				System.out.println(num4 + " > " + num5 + " > " + num6);
			} else if (num4>num6 && num6>num5){
				System.out.println(num4 + " > " + num6 + " > " + num5);
			} else if (num5>num4 && num4>num6){
				System.out.println(num5 + " > " + num4 + " > " + num6);
			} else if (num5>num6 && num6>num4){
				System.out.println(num5 + " > " + num6 + " > " + num4);
			} else if (num6>num5 && num5>num4){
				System.out.println(num6 + " > " + num5 + " > " + num4);
			} else if (num6>num4 && num4>num5){
				System.out.println(num6 + " > " + num4 + " > " + num5);
			}

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}