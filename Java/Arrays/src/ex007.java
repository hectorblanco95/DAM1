import java.io.*;
public class ex007 {
	//Leer por teclado la nota de los alumnos de una clase y calcular la nota media del grupo. Mostrar los alumnos con notas superiores a la media.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			double nota=0;
			double media=0;
			int cont=0;
			String h;
			double[] array = new double[20];

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
				nota=nota+array[i];
			}
			media=nota/array.length;
			for (int i=0; i < array.length; i++){
				if (array[i]>media){
					cont++;
				}
			}
			System.out.println("Media: " + media);
			if (cont>0){
				System.out.println("Superiores a la media: " + cont);
			} else{
				System.out.println("Superiores a la media: " + cont);
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}