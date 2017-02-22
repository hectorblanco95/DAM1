import java.io.*;
public class ex009 {
	//Leer una serie de números por teclado y contar cuántos de ellos acaban en 2.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int num=1;
			int cont=0;
			int i=0;
			String h;

			//int[] a = new int[num];

			System.out.println("Introduce una serie de numeros. Cuando quieras parar escribe 0!");

			while (num!=0) {
				h = buffer.readLine();
				num = Integer.parseInt(h);
				if (h.charAt(h.length()-1)=='2'){
					cont++;
					i++;
				}	
			}
			System.out.println(cont);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}