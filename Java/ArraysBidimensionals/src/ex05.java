import java.io.*;
public class ex05 {

	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int[][] matrix = new int[4][3];
			int suma=0;

			for (int i = 0; i < matrix.length; i++) {

				for (int j = 0; j < matrix[i].length; j++) {
					System.out.println(matrix[i].length);
					System.out.println("Introduce un numero: ");
					matrix[i][j]=Integer.parseInt(buffer.readLine());
					suma+=matrix[i][j];
				} 
			} 

			int i = 0;
			int j = 0;

			while (i < matrix.length) {
				j = 0;

				while(j < matrix[i].length){

					System.out.print (matrix[i][j]);
					j++;
				}
				System.out.println ();
				i++;
			}	
			System.out.println("Suma Total: " + suma);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}