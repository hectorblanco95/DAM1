import java.io.*;
public class ex16{
	//Escriure un programa en llenguatge Java on es demanin per teclat dos valors i mostri per pantalla el resultat de la divisió del primer entre el segon valor. El programa haurà de comprovar que el divisor no pot ser 0.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un mes:");
			String num = buffer.readLine();
			System.out.println("Dame un mes:");
			String num2 = buffer.readLine();
			
			double num3 = Double.parseDouble(num);
			double num4 = Double.parseDouble(num2);		


			if (num4==0){
				System.out.println("El divisor no puede ser 0");
			} else{
				System.out.println(num3 + "/" + num4 + " = " + num3/num4);
			}
			
			
				
			
		

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}