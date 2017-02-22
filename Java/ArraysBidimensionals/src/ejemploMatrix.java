public class ejemploMatrix {

	public static void main (String[] args){

		int[][] matrix = new int[3][3];

		// version for

		matrix[0][0] = 0;
		matrix[0][1] = 1; 
		matrix[0][2] = 2; 
		matrix[1][0] = 3;
		matrix[1][1] = 4; 
		matrix[1][2] = 5; 
		matrix[2][0] = 6; 
		matrix[2][1] = 7;
		matrix[2][2] = 8;

		for (int i = 0; i < matrix.length; i++) {

			for (int j = 0; j < matrix[i].length; j++) {

				System.out.print (matrix[i][j]);
			} 

			System.out.println ("");

		} 

		System.out.println ("");
		System.out.println ("");        

		// version while

		matrix[0][0] = 8;
		matrix[0][1] = 7; 
		matrix[0][2] = 6; 
		matrix[1][0] = 5;
		matrix[1][1] = 4; 
		matrix[1][2] = 3; 
		matrix[2][0] = 2; 
		matrix[2][1] = 1;
		matrix[2][2] = 0; 

		int i = 0;
		int j = 0;

		while (i < matrix.length) {

			j = 0;

			while(j < matrix[i].length){

				System.out.print (matrix[i][j]);
				j++;
			}

			System.out.println ("");
			i++;
		}

	}

}