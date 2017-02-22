import java.io.*;
public class practicaMonos {
	//Practica monos
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int ingreso=0;
			int codigoIngreso=0;
			double numMax=Integer.MIN_VALUE;
			double numMax2=Integer.MIN_VALUE;
			double numMax3=Integer.MIN_VALUE;
			double numMax4=Integer.MIN_VALUE;
			double numMin=Integer.MAX_VALUE;
			double numMin2=Integer.MAX_VALUE;
			double numMin3=Integer.MAX_VALUE;
			double numMin4=Integer.MAX_VALUE;
			int cont=0;
			int cont2=0;
			int edadChimpance=0;
			int mediaEdadChimpance=0;
			double mediaPesoChimpance=0;
			double pesoChimpance=0;
			int edadGorila=0;
			int mediaEdadGorila=0;
			double mediaPesoGorila=0;
			double pesoGorila=0;			
			int v=-1;


			while(v !=0){
				System.out.println(" ***** MENU PRINCIPAL ***** ");
				System.out.println(" -------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("   [1] - REGISTRAR INGRESOS");
				System.out.println("   [2] - ESTADISTICAS");
				System.out.println("   [3] - REINICIAR");
				System.out.println("   [0] - SALIR");
				v = Integer.parseInt(buffer.readLine());

				switch(v){

				case 1:
					System.out.println("INTRODUZCA CUANTOS INGRESOS QUIERE REGISTRAR:");
					String h = buffer.readLine();
					ingreso = Integer.parseInt(h);

					for (int i=0; i<ingreso; i++){
						System.out.println("Introduce 1 para chimpancé y 2 para gorila:");
						String c = buffer.readLine();
						codigoIngreso = Integer.parseInt(c);
						while (codigoIngreso !=1 && codigoIngreso !=2){
							System.out.println("El código de ingreso, és erróneo!");
							System.out.println("Introduce el código de ingreso:");
							codigoIngreso = Integer.parseInt(buffer.readLine());							
						}
						if (codigoIngreso==1){
							cont++;
							while (edadChimpance<0 && edadChimpance>50){
								System.out.println("La edad del chimpancé, és errónea!");
								System.out.println("Introduce la edad del ejemplar, entre 0 y 50:");
								edadChimpance = Integer.parseInt(buffer.readLine());
							}
							System.out.println("Introduce la edad del ejemplar, entre 0 y 50:");
							String d = buffer.readLine();
							edadChimpance = Integer.parseInt(d);
							mediaEdadChimpance=mediaEdadChimpance+edadChimpance;
							if (edadChimpance>numMax){
								numMax=edadChimpance;
							} if (edadChimpance<numMin){
								numMin=edadChimpance;
							}
							System.out.println("Peso del ejemplar:");
							String f = buffer.readLine();
							pesoChimpance = Double.parseDouble(f);
							mediaPesoChimpance=mediaPesoChimpance+pesoChimpance;
							if (pesoChimpance>numMax2){
								numMax2=pesoChimpance;
							} if (pesoChimpance<numMin2){
								numMin2=pesoChimpance;
							}
						} else if (codigoIngreso==2){
							cont2++;
							while (edadGorila<0 && edadGorila>40){
								System.out.println("La edad del gorila, és errónea!");
								System.out.println("Introduce la edad del ejemplar, entre 0 y 40:");
								edadGorila = Integer.parseInt(buffer.readLine());
							}
							System.out.println("Introduce la edad del ejemplar, entre 0 y 40:");
							String e = buffer.readLine();
							edadGorila = Integer.parseInt(e);					
							mediaEdadGorila=mediaEdadGorila+edadGorila;
							if (edadGorila>numMax3){
								numMax3=edadChimpance;
							} if (edadGorila<numMin3){
								numMin3=edadGorila;
							}
							System.out.println("Peso del ejemplar:");
							String g = buffer.readLine();
							pesoGorila = Double.parseDouble(g);
							mediaPesoGorila=mediaPesoGorila+pesoGorila;
							if (pesoGorila>numMax4){
								numMax4=pesoGorila;
							} if (pesoChimpance<numMin4){
								numMin4=pesoGorila;
							}
						}
					}
					break;

				case 2:
					System.out.println("Chimpancé más viejo: " + numMax);
					System.out.println("Chimpancé más joven: " + numMin);
					System.out.println("Edad media chimpancés: " + mediaEdadChimpance/cont);
					System.out.println("Chimpancé con mayor peso: " + numMax2);
					System.out.println("Chimpancé con menor peso: " + numMin2);
					System.out.println("Peso medio chimpancés: " + mediaPesoChimpance/cont);
					System.out.println();
					System.out.println();
					System.out.println("Gorila más viejo: " + numMax3);
					System.out.println("gorila más joven: " + numMin3);
					System.out.println("Edad media gorila: " + mediaEdadGorila/cont2);
					System.out.println("Gorila con mayor peso: " + numMax4);
					System.out.println("Gorila con menor peso: " + numMin4);
					System.out.println("Peso medio gorilas: " + mediaPesoGorila/cont2);
					System.out.println();
					break;

				case 3:
					ingreso=0;
					codigoIngreso=0;
					numMax=Integer.MIN_VALUE;
					numMax2=Integer.MIN_VALUE;
					numMax3=Integer.MIN_VALUE;
					numMax4=Integer.MIN_VALUE;
					numMin=Integer.MAX_VALUE;
					numMin2=Integer.MAX_VALUE;
					numMin3=Integer.MAX_VALUE;
					numMin4=Integer.MAX_VALUE;
					cont=0;
					cont2=0;
					edadChimpance=0;
					mediaEdadChimpance=0;
					mediaPesoChimpance=0;
					pesoChimpance=0;
					edadGorila=0;
					mediaEdadGorila=0;
					mediaPesoGorila=0;
					pesoGorila=0;
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
