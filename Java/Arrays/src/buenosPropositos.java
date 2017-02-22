import java.io.*;
import java.util.*;
public class buenosPropositos {
	//PraÌ€ctica Buenos propoÌ�sitos
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int v=0;
			int sumaEjercicio=0;
			int sumaAlimentarse=0;
			int alimentarseMayor=Integer.MIN_VALUE;
			int alimentarseMenor=Integer.MAX_VALUE;
			int cont=0;
			int cont2=0;
			int cont3=0;

			ArrayList<String> dias = new ArrayList<String>();
			ArrayList<Integer> ejercicio = new ArrayList<Integer>();
			ArrayList<Integer> alimentarse = new ArrayList<Integer>();
			ArrayList<Integer> aprovechar = new ArrayList<Integer>();
			ArrayList<Integer> puntosDias = new ArrayList<Integer>();

			dias.add("lunes");
			dias.add("martes");
			dias.add("mièrcoles");
			dias.add("jueves");
			dias.add("viernes");
			dias.add("sàbado");
			dias.add("domingo");

			puntosDias.add(0);
			puntosDias.add(0);
			puntosDias.add(0);
			puntosDias.add(0);
			puntosDias.add(0);
			puntosDias.add(0);
			puntosDias.add(0);

			while(v !=8){
				System.out.println(" ****************** SALTOS DE LONGITUD ****************** ");
				System.out.println(" -------------------------------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("       [1] - PROPOSITO HACER EJERCICIO");
				System.out.println("       [2] - PROPOSITO ALIMENTARSE BIEN");
				System.out.println("       [3] - PROPOSITO APROVECHAR EL TIEMPO Y TRABAJAR MAS");
				System.out.println("       [4] - VALORAR EJERCICIO ECHO");
				System.out.println("       [5] - VALORAR ALIMENTACION");
				System.out.println("       [6] - VALORAR PRODUCTIVIDAD DE CADA DIA");
				System.out.println("       [7] - VALORACION GENERAL");
				System.out.println("       [8] - SALIR");
				v = Integer.parseInt(buffer.readLine());

				switch(v){

				case 1:
					for (int i=0;i<dias.size();i++){
						System.out.println("Minutos que has hecho de ejercicio el " + dias.get(i) + ": ");
						ejercicio.add(i, Integer.parseInt(buffer.readLine()));
					}		
					break;

				case 2:
					for (int i=0;i<dias.size();i++){
						System.out.println("Piezas de fruta y verdura que has consumido el " + dias.get(i) + ": ");
						alimentarse.add(i, Integer.parseInt(buffer.readLine()));
					}
					break;
				case 3:
					for (int i=0;i<dias.size();i++){
						System.out.println("Horas productivas de " + dias.get(i) + ": ");
						aprovechar.add(i, Integer.parseInt(buffer.readLine()));
					}
					break;

				case 4:
					for (int i=0;i<ejercicio.size();i++){
						sumaEjercicio=(sumaEjercicio+ejercicio.get(i));						
					}
					if (sumaEjercicio/60>7 || ejercicio.get(0)>=45 && ejercicio.get(1)>=45 && ejercicio.get(2)>=45 && ejercicio.get(3)>=45 && ejercicio.get(4)>=45 && ejercicio.get(5)>=45 && ejercicio.get(6)>=45){
						System.out.println("Valoracion: positiva!");
					} else{
						System.out.println("Valoracion: negativa!");
					}
					break;

				case 5:
					for (int i=0;i<alimentarse.size();i++){
						sumaAlimentarse=(sumaAlimentarse+alimentarse.get(i));
						if (alimentarse.get(i)>alimentarseMayor){
							alimentarseMayor=alimentarse.get(i);
						} if (alimentarse.get(i)<alimentarseMenor){
							alimentarseMenor=alimentarse.get(i);
						}
					}
					System.out.println("Media: " + sumaAlimentarse/7);
					System.out.println("Día que se ha consumido más fruta y verdura: " + alimentarseMayor);
					System.out.println("Día que se ha consumido menos fruta y verdura: " + alimentarseMenor);
					break;

				case 6:
					for (int i=0;i<puntosDias.size();i++){
						if (ejercicio.get(i)>=45){
							puntosDias.set(i, puntosDias.get(i)+2);
						} if (alimentarse.get(i)>=5){
							puntosDias.set(i, puntosDias.get(i)+2);
						}
						if (aprovechar.get(i)>=8){
							puntosDias.set(i, puntosDias.get(i)+1);
							if (aprovechar.get(i)>8){
								puntosDias.set(i, puntosDias.get(i)+(aprovechar.get(i)-8));
							}
						}
						System.out.println("Puntos de productividad del " + dias.get(i) + ": " + puntosDias.get(i));
					}
					break;

				case 7:
					for (int i=0;i<ejercicio.size();i++){
						if (ejercicio.get(i)==0){
							cont++;
						} if (alimentarse.get(i)==0){
							cont2++;
						} if (aprovechar.get(i)<5){
							cont3++;
						}	
					}
					if (cont<3 && cont2==0 && cont3==0){
						System.out.println("ENHORABUENA HAS CUMPLIDO TODOS TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");					
					} else if (cont<3 && cont2==0){
						System.out.println("ENHORABUENA HAS CUMPLIDO 2 DE TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");
					} else if (cont<3 && cont3==0){
						System.out.println("ENHORABUENA HAS CUMPLIDO 2 DE TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");
					} else if (cont2==0 && cont3==0){
						System.out.println("ENHORABUENA HAS CUMPLIDO 2 DE TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");
					} else{				
						if (cont>0){
							if (cont==1){
								System.out.println(cont + " día durante la semana sin hacer ejercicio!");
							} else{
								System.out.println(cont + " días durante la semana sin hacer ejercicio!");
							}
						} if (cont2>0){
							if (cont2==1){
								System.out.println(cont2 + " día sin comer fruta ni verdura!");
							} else{
								System.out.println(cont2 + " días sin comer fruta ni verdura!");
							}
						} if (cont3>0){
							if (cont3==1){
								System.out.println(cont3 + " día mal aprovechado!");
							} else{
								System.out.println(cont3 + " días mal aprovechados!");
							}
						}
						System.out.println("ANIMO LA PROXIMA VEZ SERÁ MEJOR!!");
					}
					break;

				case 8:
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