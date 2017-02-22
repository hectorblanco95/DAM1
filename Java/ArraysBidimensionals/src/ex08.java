public class ex08 {

	public static void main (String[] args){

		int[][] matrix = new int[5][5];
		int numMax=Integer.MIN_VALUE;
		int posIMax = 0;
		int posJMax = 0;
		int numMin=Integer.MAX_VALUE;
		int posIMin = 0;
		int posJMin = 0;


		for (int i = 0; i < matrix.length; i++) {

			for (int j = 0; j < matrix[i].length; j++) {
				System.out.print(matrix[i][j]=(int) (Math.random()*10));
				if (matrix[i][j]>numMax){
					numMax=matrix[i][j];
					posIMax=i;
					posJMax=j;
				} if (matrix[i][j]<numMin){
					numMin=matrix[i][j];
					posIMin=i;
					posJMin=j;
				}
			}
			System.out.println();
		}
		System.out.println();
		System.out.println();
		
		matrix[posIMax][posJMax]=numMin;
		matrix[posIMin][posJMin]=numMax;


		int i = 0;

		while (i < matrix.length) {
			int j = 0;

			while(j < matrix[i].length){

				System.out.print (matrix[i][j]);
				j++;
			}
			System.out.println ();
			i++;
		}

	}

}