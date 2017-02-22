import java.io.*;
public class ex03{
	//Escriure un programa en llenguatge Java on es demani per teclat un valor enter i determini si és múltiple de 2 i de 5. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero entero:");
			String num = buffer.readLine();


			int num2 = Integer.parseInt(num);


			if (num2 % 2==0 && num2 % 5 ==0){
				System.out.println(num2 + " Es entero");
			} else{
				System.out.println(num2 + " No es entero");
			}
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}