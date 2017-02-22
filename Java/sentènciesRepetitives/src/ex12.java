import java.io.*;
public class ex12 {
	// Escriure un programa en Java on es generi un número aleatori entre 0 i 100 (podeu utilitzar la funció Random que ofereix Java). A continuació, l’usuari haurà d’encertar el número amb tots els intents que necessiti. A cada intent, el programa li dirà si el nombre a encertar és més gran o més petit que el nombre introduït. El programa acabarà quan s’encerti el nombre
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
