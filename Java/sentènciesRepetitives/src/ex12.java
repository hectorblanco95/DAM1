import java.io.*;
public class ex12 {
	// Escriure un programa en Java on es generi un n�mero aleatori entre 0 i 100 (podeu utilitzar la funci� Random que ofereix Java). A continuaci�, l�usuari haur� d�encertar el n�mero amb tots els intents que necessiti. A cada intent, el programa li dir� si el nombre a encertar �s m�s gran o m�s petit que el nombre introdu�t. El programa acabar� quan s�encerti el nombre
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
