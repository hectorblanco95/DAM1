import java.io.*;
public class ex002 {
	//Contar el número de elementos positivos, negativos y ceros en un array de 10 enteros.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int cont=0;
			int cont2=0;
			int cont3=0;
			String h;
			int[] array = new int[10];

			for (int i = 0; i < array.length; i++) {
				System.out.println("Introduce un numero:");
				h = buffer.readLine();
				array[i] = Integer.parseInt(h);
				if (array[i]>0){
					cont++;
				} if (array[i]==0){
					cont2++;	
					} if (array[i]<0){
						cont3++;	
					}
			}
			System.out.println("Positivos: " + cont);
			System.out.println("Ceros: " + cont2);
			System.out.println("Negativos: " + cont3);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}