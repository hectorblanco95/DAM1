import java.io.*;
public class ex008 {
	//Leer por teclado un número decimal y mostrar su valor en binario.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int num;
			int cont=0;
			String h;

			System.out.println("Introduce un numero decimal:");
			h = buffer.readLine();
			num = Integer.parseInt(h);		

			int[] a = new int[num];

			for (int i = 0; num >= 1; i++) {
				a[i]=num%2;
				num=num/2;
				cont++;
			}
			for (int i = cont-1; i >= 0; i--) {
				System.out.print(a[i]);

			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}