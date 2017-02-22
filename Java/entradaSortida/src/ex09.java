import java.io.*;
public class ex09 {
	//Escriure un programa en Java que demani per teclat els tres coeficients necessaris en una equació de segon grau. Cal que el programa faci el càlcul de l'equació de segon grau i mostri les seves solucions reals si és que les té. Si no existeixen, cal indicar-ho amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero");
			String num = buffer.readLine();
			System.out.println("Dame otro numero");
			String num2 = buffer.readLine();
			System.out.println("Dame otro numero");
			String num3 = buffer.readLine();

			double num4 = Double.parseDouble(num);
			double num5 = Double.parseDouble(num2);
			double num6 = Double.parseDouble(num3);



			System.out.println("x = " );


		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
