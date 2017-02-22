import java.io.*;
public class ex006 {
	// Leer 10 números enteros por teclado y guardarlos en un array. Calcula y muestra la media de los números que estén en las posiciones pares del array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			
			String h="";
			int cont=0;
			int num2=0;
			int[] num = new int[10];

			for (int i = 0; i < num.length ; i++) {
				System.out.println("Introduce un numero:");
				h = buffer.readLine();
				num[i] = Integer.parseInt(h);
				if (i%2==0){
					cont++;
					num2+=num[i];
				}
			}
			System.out.println("Media de las posiciones pares: " + num2/cont);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}