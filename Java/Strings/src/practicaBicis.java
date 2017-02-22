import java.io.*;
public class practicaBicis {
	//Practica bicis extreme-stucom s.a.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce el precio de la bicicleta:");
			String a = buffer.readLine();
			System.out.println("Introduce el precio del monopat�n:");
			String b = buffer.readLine();

			int bicicleta = Integer.parseInt(a);
			int monopatin = Integer.parseInt(b);
			int codigoProducto=0;
			int cont=0;
			int cont2=0;
			int cantidadVendidaBicis=0;
			int contVendidaBicis=0;
			int cantidadVendidaMonopatines=0;
			int contVendidaMonopatines=0;
			int v=-1;

			while(bicicleta<200 || bicicleta>1000 || monopatin<20 || monopatin>150){
				System.out.println("Precio incorrecto!");
				System.out.println("Introduce el precio de la bicicleta:");
				bicicleta = Integer.parseInt(buffer.readLine());
				System.out.println("Introduce el precio del monopat�n:");
				monopatin = Integer.parseInt(buffer.readLine());
			}

			while(v !=0){
				System.out.println(" ***** EXTREME-STUCOM S.A. ***** ");
				System.out.println(" ------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("         [1] - REGISTRAR VENTAS");
				System.out.println("         [2] - ESTADISTICAS");
				System.out.println("         [3] - REINICIAR");
				System.out.println("         [0] - SALIR");
				v = Integer.parseInt(buffer.readLine());

				switch(v){

				case 1:
					System.out.println("Introduce el c�digo de producto vendido, 1 para bicicletas y 2 para monopatines:");
					System.out.println("O introduce -1 para salir!");
					String c = buffer.readLine();
					codigoProducto = Integer.parseInt(c);

					while (codigoProducto !=-1){
						while (codigoProducto !=1 && codigoProducto !=2){
							System.out.println("El c�digo de producto vendido, �s err�neo!");
							System.out.println("Introduce el c�digo de producto vendido:");
							codigoProducto = Integer.parseInt(buffer.readLine());							
						}
						if (codigoProducto==1){
							cont++;
							System.out.println("Cantidad vendida:");
							String d = buffer.readLine();
							cantidadVendidaBicis = Integer.parseInt(d);
							contVendidaBicis=contVendidaBicis+cantidadVendidaBicis;
						} else if (codigoProducto==2){
							cont2++;
							System.out.println("Cantidad vendida:");
							String e = buffer.readLine();
							cantidadVendidaMonopatines = Integer.parseInt(e);
							contVendidaMonopatines=contVendidaMonopatines+cantidadVendidaMonopatines;
						}
						System.out.println("Introduce el c�digo de producto vendido, 1 para bicicletas y 2 para monopatines:");
						System.out.println("O introduce -1 para salir!");
						codigoProducto = Integer.parseInt(buffer.readLine());
					}
					break;

				case 2:
					System.out.println("           CLIENTES     UNIDADES     INGRESOS");
					System.out.println("BICIS         " + cont + "            " + contVendidaBicis + "            " + bicicleta*contVendidaBicis);
					System.out.println("MONOPATINES   " + cont2 + "            " + contVendidaMonopatines + "            " + monopatin*contVendidaMonopatines);
					System.out.println();
					break;

				case 3:
					codigoProducto=0;
					cont=0;
					cont2=0;
					cantidadVendidaBicis=0;
					contVendidaBicis=0;
					cantidadVendidaMonopatines=0;
					contVendidaMonopatines=0;
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

			System.out.println("Error");
		}
	}
}
