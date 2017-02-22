import java.io.*;
public class ex01 {
	//Escriure un programa en Java que demani per teclat 10 notes d’alumnes i les mostri per pantalla. Cal utilitzar l’estructura array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			double[] array = new double[10];

			for (int i = 0; i < array.length; i++) {
				System.out.println("Introduce una nota:");
				h = buffer.readLine();
				array[i] = Double.parseDouble(h); 
				while (array[i]>10 || array[i]<0){
					System.out.println("NOTA NO VALIDA!");
					System.out.println("Introduce una nota:");
					h = buffer.readLine();
					array[i] = Double.parseDouble(h); 
				}
				System.out.println("Nota: " + array[i]);
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}