import java.io.*;
import java.text.DecimalFormat;
import java.text.NumberFormat;
public class vengadores2 {

	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			byte v=1;
			byte[][] matrix = new byte[4][5];
			String[] vengadores = {"Capitán América", "Iron Man", "Viuda Negra", "Thor"};
			String[] habilidades = {"Fuerza", "Inteligencia", "Velocidad", "Intuición", "Inmortalidad"};

			while(v !=5){
				System.out.println(" ********** MENU PRINCIPAL ********** ");
				System.out.println(" ------------------------------------ ");
				System.out.println(" Elige opcion:");
				System.out.println("    [1] - REGISTRAR DATOS ALEATORIOS");
				System.out.println("    [2] - EVALUAR EL MÁS SUPERHÉROE");
				System.out.println("    [3] - ANALIZAR MISIONES");
				System.out.println("    [4] - REPONER HABILIDADES");
				System.out.println("    [5] - SALIR");
				v = Byte.parseByte(buffer.readLine());

				switch(v){

				case 1:
					System.out.println("Introduce la contraseña:");
					if (Short.parseShort(buffer.readLine())==1234){

						for (int i = 0; i < matrix.length; i++) {
							System.out.println(vengadores[i]);
							for (int j = 0; j < matrix[i].length; j++) {
								System.out.print(habilidades[j] + ": ");
								System.out.print(matrix[i][j]=(byte) (Math.random()*10));
								if (j!=4){
									System.out.print(", ");
								}
							}
							System.out.println();
							System.out.println();
						}


					} else{	
						System.out.println("Contraseña incorrecta!");
					}
					break;

				case 2:	
					DecimalFormat formatter = new DecimalFormat("#0.0");
					float[] ranking = new float[4];
					for (int i = 0; i < matrix.length; i++) {
						ranking[i]+=(float) (matrix[i][0]*0.3);
						ranking[i]+=(float) (matrix[i][1]*0.3);
						ranking[i]+=(float) (matrix[i][2]*0.2);
						ranking[i]+=(float) (matrix[i][3]*0.1);
						ranking[i]+=(float) (matrix[i][4]*0.1);
					}
					if (ranking[0]>ranking[1] && ranking[1]>ranking[2] && ranking[2]>ranking[3]){
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
					} else if (ranking[0]>ranking[2] && ranking[2]>ranking[1] && ranking[1]>ranking[3]){
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
					} else if (ranking[0]>ranking[3] && ranking[3]>ranking[2] && ranking[2]>ranking[1]){
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
					} else if (ranking[1]>ranking[0] && ranking[0]>ranking[2] && ranking[2]>ranking[3]){
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
					} else if (ranking[1]>ranking[2] && ranking[2]>ranking[0] && ranking[1]>ranking[3]){
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
					} else if (ranking[1]>ranking[3] && ranking[3]>ranking[2] && ranking[2]>ranking[0]){
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
					} else if (ranking[2]>ranking[1] && ranking[1]>ranking[0] && ranking[0]>ranking[3]){
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
					} else if (ranking[2]>ranking[0] && ranking[0]>ranking[1] && ranking[1]>ranking[3]){
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
					} else if (ranking[2]>ranking[3] && ranking[3]>ranking[0] && ranking[0]>ranking[1]){
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
					} else if (ranking[3]>ranking[1] && ranking[1]>ranking[2] && ranking[2]>ranking[0]){
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
					} else if (ranking[3]>ranking[2] && ranking[2]>ranking[1] && ranking[1]>ranking[0]){
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
					} else if (ranking[3]>ranking[0] && ranking[0]>ranking[2] && ranking[2]>ranking[1]){
						System.out.println(vengadores[3]+": "+formatter.format(ranking[3]));
						System.out.println(vengadores[0]+": "+formatter.format(ranking[0]));
						System.out.println(vengadores[2]+": "+formatter.format(ranking[2]));
						System.out.println(vengadores[1]+": "+formatter.format(ranking[1]));
					}

					break;

				case 3:

					break;

				case 4:

					break;

				case 5:
					System.out.println("El mundo sigue a salvo con nosotros, aunque seamos menos.");
					break;

				default:
					System.out.println("Opcinon no valida, introduce una opcion correcta!");
					System.out.println();
					break;
				}
			}	
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}