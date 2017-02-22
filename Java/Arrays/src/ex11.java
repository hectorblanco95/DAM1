import java.io.*;
public class ex11 {
	//Práctica SALTOS DE LONGITUD. Se quiere realizar un programa para gestionar la lista de participaciones en una competición de saltos de longitud. El número de plazas disponibles es ilimitado, es decir, el usuario indicará que no quiere añadir más participantes cuando el número de dorsal sea 0. Sus datos se irán introduciendo en el mismo orden que vayan inscribiéndose los atletas.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			int cont=1;
			int i=0;
			int v=-1;

			int[] numeroDorsal = new int[10];
			String[] nombre = new String[10];
			double[] marca2013 = new double[10];
			double[] marca2014 = new double[10];
			double[] marca2015 = new double[10];

			while(v !=0){
				System.out.println(" ********** SALTOS DE LONGITUD ********** ");
				System.out.println(" ---------------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("         [1] - INSCRIBIR UN PARTICIPANTE");
				System.out.println("         [2] - MOSTRAR LISTADO DE DATOS");
				System.out.println("         [3] - MOSTRAR LISTADO POR MARCAS");
				System.out.println("         [0] - FINALIZAR EL PROGRAMA");
				v = Integer.parseInt(buffer.readLine());

				switch(v){

				case 1:
						numeroDorsal[i]=cont++;
						System.out.println("Numero de dorsal: " + numeroDorsal[i]);
						while (numeroDorsal[i] !=0){
							if (i!=0){
								i++;
							}
							System.out.println("Introduce el nombre:");
							nombre[i] = buffer.readLine();
							System.out.println("Introduce la mejor marca del 2013:");
							h = buffer.readLine();
							marca2013[i] = Double.parseDouble(h);
							System.out.println("Introduce la mejor marca del 2014:");
							h = buffer.readLine();
							marca2014[i] = Double.parseDouble(h);
							System.out.println("Introduce la mejor marca del 2015:");
							h = buffer.readLine();
							marca2015[i] = Double.parseDouble(h);
							numeroDorsal[i]=cont++;
							System.out.println("Numero de dorsal: " + numeroDorsal[i]);
						}
					break;

				case 2:

					break;

				case 3:

					break;

				case 0:
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