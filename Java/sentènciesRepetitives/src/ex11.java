import java.io.*;
public class ex11 {
	//Variant de l�exercici anterior: L�usuari tindr� 10 intents per encertar el n�mero. Quan el programa finalitzi, s�indicar� un missatge amb el resultat del joc, tant si ha guanyat com si no, i quin era el n�mero a encertar. A cada intent, el programa indicar� quantes oportunitats queden.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			int x = (int) (100*Math.random()+1);
			int contador=10;
			int num=0;

			while (num!=x && contador>0){
				System.out.println("Dame un numero:");
				String b = buffer.readLine();

				num = Integer.parseInt(b);

				if (num>x){
					System.out.println(num + " Es m�s grande que el n�mero aleatorio");
				} else if (num<x){					
					System.out.println(num + " Es m�s peque�o que el n�mero aleatorio");
				}
				contador--;
				System.out.println("Quedan " + (contador) + " intentos");
			} 
			if (contador==0){
				System.out.println("Resultado= " + x);
			}
			if (num==x){
				System.out.println(num + " Es igual que el n�mero aleatorio");
			}
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
