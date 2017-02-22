public class ex04 {

	public static void main (String[] args){

		char[][] matrix = new char[5][5];

		for (int i = 0; i < matrix.length; i++) {

			for (int j = 0; j < matrix[i].length; j++) {
				if ((i-j)<0){
					matrix[i][j]='-';
				} else if ((i-j)>0){
					matrix[i][j]='+';
				} else{
					matrix[i][j]='0';
				}
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