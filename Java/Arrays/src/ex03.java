import java.io.*;
public class ex03 {
	//Escriure un programa en Java que demani 15 números per teclat, i mostri per pantalla la suma de tots ells. Cal utilitzar l’estructura array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			double sumaNums=0;
			String h;
			double[] array = new double[15];

			for (int i = 0; i < array.length; i++) {
				System.out.println("Introduce un numero:");
				h = buffer.readLine();
				array[i] = Double.parseDouble(h);  
				while (array[i]>10 || array[i]<0){
					System.out.println("NOTA NO VALIDA!");
					System.out.println("Introduce un numero:");
					h = buffer.readLine();
					array[i] = Double.parseDouble(h); 
				}
				sumaNums=sumaNums+array[i];
			}
			System.out.println("Suma total: " + sumaNums);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}