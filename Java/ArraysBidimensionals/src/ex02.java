public class ex02 {

	public static void main (String[] args){

		String[][] matrix = new String[5][5];

		for (int i = 0; i < matrix.length; i++) {

			for (int j = 0; j < matrix[i].length; j++) {

				matrix[i][j]="(" + i + "," + j + ")";
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

	}

}