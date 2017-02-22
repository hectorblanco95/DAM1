import java.io.*;
public class ex06 {

	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int[][] matrix = new int[4][3];
			int[][] matrix2 = new int[4][3];
			int[][] suma = new int[4][3];


			for (int i = 0; i < matrix.length; i++) {

				for (int j = 0; j < matrix[i].length; j++) {
					System.out.println("Introduce un numero en l'array1: ");
					matrix[i][j]=Integer.parseInt(buffer.readLine());
					System.out.println("Introduce un numero en l'array2: ");
					matrix2[i][j]=Integer.parseInt(buffer.readLine());
					suma[i][j]+=(matrix[i][j]+matrix2[i][j]);
				} 
			} 

			int i = 0;
			int j = 0;

			while (i < matrix.length) {
				j = 0;

				while(j < matrix[i].length){

					System.out.print (suma[i][j]);
					j++;
				}
				System.out.println ();
				i++;
			}	
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}