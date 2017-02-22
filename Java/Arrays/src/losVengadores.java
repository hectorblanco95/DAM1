import java.io.*;
import java.util.*;
public class losVengadores {
	//PraÌ€ctica los vengadores
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			byte v=0;
			byte i=0;
			byte cont=0; byte cont2=0; byte cont3=0; byte cont4=0; byte cont5=0; byte cont6=0; byte cont7=0; byte cont8=0; byte cont9=0; byte cont10=0;

			ArrayList<String> nom = new ArrayList<String>();
			ArrayList<String> habilidad = new ArrayList<String>();
			ArrayList<Byte> nivel = new ArrayList<Byte>();
			ArrayList<String> amigo = new ArrayList<String>();

			if (i==0){
				nom.add(i, "capitán américa");
				habilidad.add(i, "superfuerza, superinteligencia");
				nivel.add(i, Byte.parseByte("10"));
				amigo.add(i, "iron man");
				i++;
				cont++;
				cont10++;
			}

			while(v !=8){
				System.out.println(" ****************** LOS VENGADORES ****************** ");
				System.out.println(" -------------------------------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("       [1] - YO QUIERO SER UN VENGADOR");
				System.out.println("       [2] - NUMERO DE VENGADORES");
				System.out.println("       [3] - ORDENAR VENGADORES");
				System.out.println("       [4] - EL MAS MEJOR AMIGO");
				System.out.println("       [5] - MEJOR NIVEL DE SUPERHEROE");
				System.out.println("       [6] - SALIR");
				v = Byte.parseByte(buffer.readLine());

				switch(v){

				case 1:
					System.out.println("Introduce el nombre del superhéroe: ");
					nom.add(i, buffer.readLine().toLowerCase());
					while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
						System.out.println("Nombre incorrecto!");
						System.out.println("Introduce el nombre del superhéroe: ");
						nom.set(i, buffer.readLine().toLowerCase());
					}
					if (nom.get(i).equals("capitán américa") || nom.get(i).equals("capitan américa") || nom.get(i).equals("capitán america") || nom.get(i).equals("capitan america")){
						cont++;
						if (cont>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("capitán américa") || nom.get(i).equals("capitan américa") || nom.get(i).equals("capitán america") || nom.get(i).equals("capitan america")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("iron man")){
						cont2++;
						if (cont2>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("iron man")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("thor")){
						cont3++;
						if (cont3>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("thor")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("hulk")){
						cont4++;
						if (cont4>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("hulk")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("avispa")){
						cont5++;
						if (cont5>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("avispa")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("ojo de halcón") || nom.get(i).equals("ojo de halcon")){
						cont6++;
						if (cont6>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("ojo de halcón") || nom.get(i).equals("ojo de halcon")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("henry pym")){
						cont7++;
						if (cont7>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("henry pym")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("pantera negra")){
						cont8++;
						if (cont8>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("pantera negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					} if (nom.get(i).equals("viuda negra")){
						cont9++;
						if (cont9>=2){
							while (!nom.get(i).equals("capitán américa") && !nom.get(i).equals("capitan américa") && !nom.get(i).equals("capitán america") && !nom.get(i).equals("capitan america") && !nom.get(i).equals("iron man") && !nom.get(i).equals("thor") && !nom.get(i).equals("hulk") && !nom.get(i).equals("avispa") && !nom.get(i).equals("ojo de halcón") && !nom.get(i).equals("ojo de halcon") && !nom.get(i).equals("henry pym") && !nom.get(i).equals("pantera negra") && !nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							} while (nom.get(i).equals("viuda negra")){
								System.out.println("Nombre incorrecto!");
								System.out.println("Introduce el nombre del superhéroe: ");
								nom.set(i, buffer.readLine().toLowerCase());
							}
						}
					}
					System.out.println("Introduce habilidad: ");
					habilidad.add(i, buffer.readLine());
					System.out.println("Introduce nivel de superhéroe: ");
					nivel.add(i, Byte.parseByte(buffer.readLine()));
					while (nivel.get(i)<1 || nivel.get(i)>10){
						System.out.println("Nivel incorrecto!");
						System.out.println("Introduce nivel de superhéroe: ");
						nivel.set(i, Byte.parseByte(buffer.readLine()));
					}
					System.out.println("Introduce mejor amigo: ");
					amigo.add(i, buffer.readLine().toLowerCase());
					while (!amigo.get(i).equals("capitán américa") && !amigo.get(i).equals("capitan américa") && !amigo.get(i).equals("capitán america") && !amigo.get(i).equals("capitan america") && !amigo.get(i).equals("iron man") && !amigo.get(i).equals("thor") && !amigo.get(i).equals("hulk") && !amigo.get(i).equals("avispa") && !amigo.get(i).equals("ojo de halcón") && !amigo.get(i).equals("ojo de halcon") && !amigo.get(i).equals("henry pym") && !amigo.get(i).equals("pantera negra") && !amigo.get(i).equals("viuda negra")){
						System.out.println("Amigo incorrecto!");
						System.out.println("Introduce mejor amigo: ");
						amigo.set(i, buffer.readLine().toLowerCase());
					} while (amigo.get(i).equals(nom.get(i))){
						System.out.println("Amigo incorrecto!");
						System.out.println("Introduce mejor amigo: ");
						amigo.set(i, buffer.readLine().toLowerCase());
					}
					i++;
					cont10++;
					break;

				case 2:
					System.out.println("Número de Vengadores que hay registrados hasta el momento: " + cont10);
					break;
				case 3:
					if (nivel.contains(10)){
						for (byte j=nivel.get(i);j>0;j--,i--){
							System.out.println(nom.get(i));
							System.out.println(habilidad.get(i));
							System.out.println(nivel.get(i));
							System.out.println(amigo.get(i));
						}
					}
					break;

				case 4:

					break;

				case 5:

					break;

				case 6:
					System.out.println("ANIMO SIGUE ASI!!");
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
}