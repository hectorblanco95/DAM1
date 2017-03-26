import java.io.*;
// Se desea realizar un programa para almacenar las formas en que ha muerto el personaje de un videojuego. Las muertes pueden ser de 3 tipos:
public class ex06 {
	// Método principal de la clase Calculadora que se ejecuta al principio
	public static void main (String[] args){
		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int v=0;			

			System.out.println("Introduce el número de comerciales con los que deseas trabajar:");
			int n=Integer.parseInt(buffer.readLine());
			System.out.println("Introduce el número de productos con los que deseas trabajar:");
			int m=Integer.parseInt(buffer.readLine());

			int[][] matrix = new int[n][m];

			for (int i = 0; i < matrix.length; i++) {

				for (int j = 0; j < matrix[i].length; j++) {

					System.out.print(matrix[i][j]=(int) (Math.random() * 9+1));
				} 
				System.out.println();
			}


			while(v !=6){
				menu();
				v = Integer.parseInt(buffer.readLine());
				switch(v){

				case 1:
					for (n=0; n<matrix.length; n++){
						System.out.print("Comercial " + n +": " + ventasComerciales(matrix, n));
						System.out.println();
					}
					break;

				case 2:
					for (m=0; m<matrix.length; m++){
						System.out.print("Producto " + m +": " + ventasComerciales(matrix, n));
						System.out.println();
					}
					break;
				case 3:

					break;

				case 4:
					System.out.println("Salir!");
					break;

				default:
					System.out.println("Opción no válida, introduce una opción correcta!");
					System.out.println();
					break;
				}
			}

		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}

	public static void menu () {
		System.out.println(" ******************* MENU ******************* ");
		System.out.println(" -------------------------------------------- ");
		System.out.println(" Elige opcion:");
		System.out.println("       [1] - Ventas totales de cada comercial");
		System.out.println("       [2] - Ventas totales de cada producto");
		System.out.println("       [3] - Comercial que más ha vendido");
		System.out.println("       [4] - Producto menos vendido");
		System.out.println("       [5] - Salir");
	}
	static int ventasComerciales (int [][] matrix, int i) {
		int x=0;
		for (int j = 0; j < matrix[i].length; j++) {
			x+=matrix[i][j];
		}
		return x;
	}
	static int ventasProducto (int [][] matrix, int i) {
		int x=0;
		for (int j = 0; j < matrix[i].length; j++) {
			x+=matrix[i][j];
		
		}
		return x;
	}
}