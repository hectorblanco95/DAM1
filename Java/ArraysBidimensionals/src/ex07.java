public class ex07 {

	public static void main (String[] args){

		int[][] matrix = new int[5][5];
		int[] aux = new int[matrix.length];

		for (int i = 0; i < matrix.length; i++) {

			for (int j = 0; j < matrix[i].length; j++) {
				System.out.print(matrix[i][j]=(int) (Math.random()*10));
			}
			System.out.println();
			aux[i] = matrix[i][i];	
		}
		System.out.println();
		System.out.println();

		int j = matrix.length;
		for (int i = 0; i < matrix.length; i++) {	
			matrix[i][i]=aux[(matrix.length-1)-i];
			j--;		
		}

		int i = 0;

		while (i < matrix.length) {
			j = 0;

			while(j < matrix[i].length){

				System.out.print (matrix[i][j]);
				j++;
			}
			System.out.println ();
			i++;
		}

	}

}