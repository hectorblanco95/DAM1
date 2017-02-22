import java.io.*;
public class ex004 {
	//Leer N alturas y calcular la altura media. Calcular cuántas hay superiores a la media y cuántas inferiores.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			double N2=0;
			double media=0;
			int cont=0;
			int cont2=0;
			String h;
			double[] array = new double[10];

			for (int i = 0; i < array.length; i++) {
				System.out.println("Introduce un numero:");
				h = buffer.readLine();
				array[i] = Double.parseDouble(h);  
				N2=N2+array[i];
			}
			media=N2/array.length;
			for (int i=0; i < array.length; i++){
				if (array[i]>media){
					cont++;
				} if (array[i]<media){
					cont2++;
				}
			}
			System.out.println("Media: " + media);
			if (cont>0){
				System.out.println("Superiores a la media: " + cont);
			} if (cont2>0){
				System.out.println("Inferiores a la media: " + cont2);
			} 
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}