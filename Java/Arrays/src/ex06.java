import java.io.*;
public class ex06 {
	//Escriure un programa en Java que llegeixi per teclat dos arrays de 10 posicions cadascun. El programa haurà de sumar els dos arrays i mostrar el resultat per pantalla.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			double[] array = new double[10];
			double[] array2 = new double[10];
			double[] array3 = new double[10];

			for (int i = 0; i < array.length; i++) { 
				System.out.println("Introduce un numero, para array 1:");
				h = buffer.readLine();
				array[i] = Double.parseDouble(h);  
				System.out.println("Introduce un numero, para array 2:");
				h = buffer.readLine();
				array2[i] = Double.parseDouble(h);  	
			} for (int i = 0; i < array.length; i++) { 
				array3[i]=array[i]+array2[i];
				System.out.println("Suma Arrays: " + array3[i]);
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}