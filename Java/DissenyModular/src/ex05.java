import java.io.*;
// Se desea realizar un programa para almacenar las formas en que ha muerto el personaje de un videojuego. Las muertes pueden ser de 3 tipos:
public class ex05 {
	// Método principal de la clase Calculadora que se ejecuta al principio
	public static void main (String[] args){
		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int v=0;
			String[] array = new String[5];
			String [] abc = {"Ataque enemigo", "Caída", "Bomba"};
			array = array(array, abc);

			while(v !=6){
				v = menu();

				switch(v){

				case 1:
					System.out.println("Que muerte quieres consultar:");
					int x=Integer.parseInt(buffer.readLine());
					while (x<0 || x>4){
						System.out.println("Numero fuera del limite");
						System.out.println("Que muerte quieres consultar:");
					}
					for (int i=0;i<array.length;i++){
						if (x==i){
							System.out.println(array[i]);
						}
					}
					break;

				case 2:
					int cont=0;
					int cont2=0;
					int cont3=0;
					for (int i=0;i<array.length;i++){
						if (array[i]=="Ataque enemigo"){
							cont++;
						} if (array[i]=="Caída"){
							cont2++;
						} if (array[i]=="Bomba"){
							cont3++;
						}
					}
					mostrarArray(cont, cont2, cont3);

					break;
				case 3:
					array = new String[5];
					array = array(array, abc);
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

	public static int menu () {

		System.out.println(" **************************************************** MENU **************************************************** ");
		System.out.println(" -------------------------------------------------------------------------------------------------------------- ");
		System.out.println(" Elige opcion:");
		System.out.println("       [1] - Mostrar muerte de la vida");
		System.out.println("       [2] - Contar cuántas veces ha muerto de cada forma, y mostrar los resultados ordenados de mayor a menor");
		System.out.println("       [3] - Reiniciar el vector");
		System.out.println("       [4] - Salir");
		try{
			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			String l=buffer.readLine();
			char opc = l.charAt(0);
			boolean b = isNumber(opc);

			if (b == true){
				int w = Integer.parseInt(l);
			}
			else{
				System.out.println("No es numero");
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}

		return w;
	}	
	static String[] array (String[] array, String[] abc) {
		for (int i=0;i<array.length;i++){
			array[i]=abc[(int) (Math.random() * 3)];
		}
		return array;

	}
	public static void mostrarArray (int cont, int cont2, int cont3) {

		if (cont>=cont2 && cont2>=cont3){
			System.out.println("Ha muerto de Ataque enemigo " + cont + " veces");
			System.out.println("Ha muerto de Caída " + cont2 + " veces");
			System.out.println("Ha muerto de Bomba " + cont3 + " veces");
		} else if(cont2>=cont && cont>=cont3){
			System.out.println("Ha muerto de Caída " + cont2 + " veces");
			System.out.println("Ha muerto de Ataque enemigo " + cont + " veces");
			System.out.println("Ha muerto de Bomba " + cont3 + " veces");
		} else if(cont3>=cont2 && cont2>=cont){
			System.out.println("Ha muerto de Bomba " + cont3 + " veces");
			System.out.println("Ha muerto de Caída " + cont2 + " veces");
			System.out.println("Ha muerto de Ataque enemigo " + cont + " veces");
		} else if (cont>=cont3 && cont3>=cont2){
			System.out.println("Ha muerto de Ataque enemigo " + cont + " veces");
			System.out.println("Ha muerto de Bomba " + cont3 + " veces");
			System.out.println("Ha muerto de Caída " + cont2 + " veces");
		}
	}

	public static boolean isNumber (char c){
		if(c >= '0' && c<= '9'){
			return true;
		}
		else return false;
	}

}