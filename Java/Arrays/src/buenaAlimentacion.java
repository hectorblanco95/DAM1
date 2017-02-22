import java.io.*;
import java.util.*;
public class buenaAlimentacion {
	//PraÌ€ctica Buenos propoÌ�sitos
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int v=0;
			int sumaCalorias=0;
			int sumaFrutaVerdura=0;
			int frutaVerduraMayor=Integer.MIN_VALUE;
			int frutaVerduraMenor=Integer.MAX_VALUE;
			int cont=0;
			int cont2=0;
			int cont3=0;
			int cont4=0;
			int cont5=0;

			ArrayList<String> dias = new ArrayList<String>();
			ArrayList<Integer> frutaVerdura = new ArrayList<Integer>();
			ArrayList<Double> calorias = new ArrayList<Double>();
			ArrayList<Integer> sal = new ArrayList<Integer>();

			dias.add("lunes");
			dias.add("martes");
			dias.add("mièrcoles");
			dias.add("jueves");
			dias.add("viernes");
			dias.add("sàbado");
			dias.add("domingo");

			while(v !=8){
				System.out.println(" ****************** Buena Alimentación ****************** ");
				System.out.println(" -------------------------------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("       [1] - PROPOSITO COMER MAS FRUTA Y VERDURA");
				System.out.println("       [2] - PROPOSITO CONSUMIR LAS CALORIAS JUSTAS");
				System.out.println("       [3] - PROPOSITO CONSUMIR POCA SAL");
				System.out.println("       [4] - CALCULAR CALORIAS CONSUMIDAS");
				System.out.println("       [5] - CALCULAR MEDIA CALORIAS SEMANAL");
				System.out.println("       [6] - VALORAR CONSUMO DE FRUTA Y VERDURA");
				System.out.println("       [7] - VALORACION GENERAL");
				System.out.println("       [8] - SALIR");
				v = Integer.parseInt(buffer.readLine());

				switch(v){

				case 1:
					for (int i=0;i<dias.size();i++){
						System.out.println("Fruta i verdura consumida el " + dias.get(i) + ": ");
						frutaVerdura.add(i, Integer.parseInt(buffer.readLine()));
					}		
					break;

				case 2:
					for (int i=0;i<dias.size();i++){
						System.out.println("Calorías que has consumido el " + dias.get(i) + ": ");
						calorias.add(i, Double.parseDouble(buffer.readLine()));
					}
					break;
				case 3:
					for (int i=0;i<dias.size();i++){
						System.out.println("Cucharadas de sal el " + dias.get(i) + ": ");
						sal.add(i, Integer.parseInt(buffer.readLine()));
					}
					break;

				case 4:
					for (int i=0;i<sal.size();i++){
						if (sal.get(i)>1.1){
							calorias.set(i, calorias.get(i)+(calorias.get(i)*0.01));
						}
					}
					for (int i=0;i<frutaVerdura.size();i++){
						if (frutaVerdura.get(i)>=5){
							calorias.set(i, calorias.get(i)-(calorias.get(i)*0.01));
						}
					}
					break;

				case 5:
					for (int i=0;i<calorias.size();i++){
						sumaCalorias+=calorias.get(i);
						if (calorias.get(i)>3000){
							cont++;
						} if (calorias.get(i)<1500){
							cont2++;
						}
					}
					sumaCalorias/=calorias.size();
					if (cont>=2){
						System.out.println("Debes controlar la cantidad de calorías consumidas, reduciendo la cantidad!");
					} if (cont2>=2){
						System.out.println("Debes controlar la cantidad de calorías consumidas, aumentando la cantidad!");
					}
					break;

				case 6:
					for (int i=0;i<frutaVerdura.size();i++){
						sumaFrutaVerdura+=frutaVerdura.get(i);
						if (frutaVerdura.get(i)>frutaVerduraMayor){
							frutaVerduraMayor=frutaVerdura.get(i);
						} if (frutaVerdura.get(i)<frutaVerduraMenor){
							frutaVerduraMenor=frutaVerdura.get(i);
						}
					}
					System.out.println("Media: " + sumaFrutaVerdura/frutaVerdura.size());
					System.out.println("Día que se ha consumido más fruta y verdura: " + frutaVerduraMayor);
					System.out.println("Día que se ha consumido menos fruta y verdura: " + frutaVerduraMenor);
					break;

				case 7:
					for (int i=0;i<sal.size();i++){
						if (sal.get(i)>0.8){
							cont3++;
						} if (calorias.get(i)>3000){
							cont4++;
						} if (frutaVerdura.get(i)<5){
							cont5++;
						}
					}
					if (cont3==0 && cont4<=1 && cont5<=1){
						System.out.println("ENHORABUENA HAS CUMPLIDO TODOS TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");					
					} else if (cont3==0 && cont4<=1){
						System.out.println("ENHORABUENA HAS CUMPLIDO 2 DE TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");
					} else if (cont3==0 && cont5<1){
						System.out.println("ENHORABUENA HAS CUMPLIDO 2 DE TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");
					} else if (cont4<=1 && cont5<1){
						System.out.println("ENHORABUENA HAS CUMPLIDO 2 DE TUS PROPÓSITOS!! Hoy puedes comerte un trozo de chocolatina!");
					} else{				
						if (cont3==0){
							if (cont3==1){
								System.out.println("Has superado " + cont3 + " día durante la semana, los 4 gramos de sal!");
							} else{
								System.out.println("Has superado " + cont3 + " días durante la semana, los 4 gramos de sal!");
							}
						} if (cont4>1){
							System.out.println("Has consumido " + cont4 + " días más de 3000 calorías!");

						} if (cont5>1){
							System.out.println("Has consumido " + cont5 + " días menos de 5 piezas de fruta y verdura!");
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