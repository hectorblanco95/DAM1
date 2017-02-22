import java.io.*;
public class ex10 {
	//Escriure un programa en Java on es generi un número aleatori entre 0 i 100 (podeu utilitzar la funció Random que ofereix Java). A continuació, l’usuari haurà d’encertar el número amb tots els intents que necessiti. A cada intent, el programa li dirà si el nombre a encertar és més gran o més petit que el nombre introduït. El programa acabarà quan s’encerti el nombre
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);
			int x = (int) (100*Math.random()+1);

			while (num!=x){

				if (num>x){
					System.out.println(num + " Es más grande que el número aleatorio");
				} else if (num<x){
					System.out.println(num + " Es más pequeño que el número aleatorio");
				}
				System.out.println("Dame un numero:");
				String b = buffer.readLine();

				num = Integer.parseInt(b);
			}
			System.out.println(num + " Es igual que el número aleatorio");		
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}






