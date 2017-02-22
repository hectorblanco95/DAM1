import java.io.*;
public class ex01{
	//Escriure un programa en llenguatge Java on es demani per teclat dos nombres i calculi quin �s el nombre m�s gran dels dos. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String num = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num2 = buffer.readLine();

			int num3 = Integer.parseInt(num);
			int num4 = Integer.parseInt(num2);

			if (num3>num4){
				System.out.println(num3 + " > " + num4);
			} else if (num4>num3){
				System.out.println(num4 + " > " + num3);
			}
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}