import java.io.*;
import java.util.*;
public class dawnOfJustice1 {
	//PraÌ€ctica DawnOfJustice1
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			byte v=0;
			byte batallas=0;
			byte puntosSuperman=0;
			byte puntosBatman=0;
			String superheroe="";

			short rnd=(short) (Math.random() * 1001+1);
			short rnd2=(short) (Math.random() * 1001+1);
			
			ArrayList<Byte> superman = new ArrayList<Byte>();
			ArrayList<Byte> batman = new ArrayList<Byte>();
			byte[] reconciliacionSuperman = new byte[3];
			byte[] reconciliacionBatman = new byte[3];
			
			while(v !=6){
				System.out.println(" ********** DawnOfJustice ********** ");
				System.out.println(" ----------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("       [1] - REGISTRAR NUEVA BATALLA");
				System.out.println("       [2] - INTENTAR RECONCILIACION");
				System.out.println("       [3] - ENTRENAR INTEIGENCIA");
				System.out.println("       [4] - RETAR INTELIGENCIA");
				System.out.println("       [5] - VER SUPERHEROE CAMPEON");
				System.out.println("       [6] - SALIR");
				v = Byte.parseByte(buffer.readLine());

				switch(v){

				case 1:
					System.out.println("Cuántas batallas quieres registrar? ");	
					batallas = Byte.parseByte(buffer.readLine());
					for (int i=0;i<batallas;i++){
						System.out.println("Introduce el número de golpes del contrincante 1 (Superman): ");
						superman.add(i, Byte.parseByte(buffer.readLine()));
						System.out.println("Introduce el número de golpes del contrincante 2 (Batman): ");
						batman.add(i, Byte.parseByte(buffer.readLine()));
						if (superman.get(i)>batman.get(i)){
							puntosSuperman+=1;
						} else if (batman.get(i)>superman.get(i)){
							puntosBatman+=1;
						} else{
							puntosSuperman+=0;
							puntosBatman+=0;
						}
					}
					System.out.println("Puntos de Superman: " + puntosSuperman);
					System.out.println("Puntos de Batman: " + puntosBatman);
					break;

				case 2:
					for (int i=0;i<reconciliacionSuperman.length && v!=6;i++){
						System.out.println("Introduce 1 números diferentes (entre 1 y 20) del contrincante 1 (Superman): ");
						reconciliacionSuperman[i]=Byte.parseByte(buffer.readLine());
						while (reconciliacionSuperman[i]<1 || reconciliacionSuperman[i]>20){
							System.out.println("Numero incorrecto!");
							System.out.println("Introduce 1 números diferentes (entre 1 y 20) del contrincante 1 (Superman): ");
							reconciliacionSuperman[i]=Byte.parseByte(buffer.readLine());
						}
						System.out.println("Introduce 1 números diferentes (entre 1 y 20) del contrincante 2 (Batman): ");
						reconciliacionBatman[i]=Byte.parseByte(buffer.readLine());
						while (reconciliacionBatman[i]<1 || reconciliacionBatman[i]>20){
							System.out.println("Numero incorrecto!");
							System.out.println("Introduce 1 números diferentes (entre 1 y 20) del contrincante 2 (Batman): ");
							reconciliacionBatman[i]=Byte.parseByte(buffer.readLine());
						}
						if (reconciliacionSuperman[i]==reconciliacionBatman[i]){
							System.out.println("Los superhéroes han hecho las paces!");
							System.out.println("El ser humano construye demasiados muros y no suficientes puentes.");
							v=6;
						}
					}
					break;
				case 3:
					System.out.println("Introduce el nombre del superhéroe: ");
					superheroe=buffer.readLine().toLowerCase();
					while (!superheroe.equals("superman") && !superheroe.equals("batman")){
						System.out.println("Nombre incorrecto!");
						System.out.println("Introduce el nombre del superhéroe: ");
						superheroe=buffer.readLine().toLowerCase();
					}
					System.out.println("Primer número: " + rnd);
					System.out.println("Segundo número: " + rnd2);
					System.out.println("Solución correcta: ");
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
