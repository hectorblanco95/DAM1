import java.io.*;
import java.util.Arrays;
public class ex07 {
	//Escriure un programa en Java que llegeixi per teclat 10 nombres enters, els quals haureu d’emmagatzemar en un array. El programa generarà un segon array que mostrarà per pantalla els 10 nombres ordenats de menor a major valor.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int[] n= new int[10];
			
			for(int i=0;i<n.length;i++){
				System.out.println("Introduce un numero:");
				n[i]=Integer.parseInt(buffer.readLine());
			}
			Arrays.sort(n);
			System.out.print("Numeros ordenats: ");
			for(int i=0;i<n.length;i++){
				System.out.print(n[i] + " ");
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}