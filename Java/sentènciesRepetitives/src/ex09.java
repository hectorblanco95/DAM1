import java.io.*;
public class ex09 {
	//Escriure un programa en Java on es demanin diferents nuÌ�meros per teclat. Es consideraraÌ€ que lâ€™usuari no voldraÌ€ introduir meÌ�s nuÌ�meros quan teclegi el nuÌ�mero 999. Cal que es mostri per pantalla el nombre maÌ€xim, el nombre miÌ�nim, i el valor mig de tots els nombres.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);

			int contador=0;

			int numMax=Integer.MIN_VALUE;
			int numMin=Integer.MAX_VALUE;
			int numTotal=0;

			while (num!=999){

				contador++;
				numTotal=numTotal+num;

				if (num>numMax){
					numMax=num;
				} if (num<numMin){
					numMin=num;
				}
				System.out.println("Dame otro numero:");
				String b = buffer.readLine();

				num = Integer.parseInt(b);
			}
			System.out.println("Numero máximo= " + numMax);
			System.out.println("Numero mínimo= " + numMin);
			System.out.println("Media de los numeros= " + numTotal/contador);

		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
