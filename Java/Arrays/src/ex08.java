import java.io.*;
public class ex08 {
	//Escriure un programa en Java que llegeixi per teclat 30 caràcters i els emmagatzemi en un array. Cal que els 30 caràcters es recullin en una variable de tipus String, i convertiu l’String en un array de caràcters. El programa haurà de comptar el nombre de vocals que té l’array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			int cont=0;
			System.out.println("Introduce 30 letras:");
			h = buffer.readLine();
			h = h.toLowerCase();
			char[] array = h.toCharArray();

			for (int i = 0; i < array.length; i++) { 
				while (array.length>30 || array.length<30){
					System.out.println("Error");
					System.out.println("Introduce 30 letras:");
					h = buffer.readLine();
					h = h.toLowerCase();
					array = h.toCharArray();
				}
				if (array[i]=='a' || array[i]=='e' || array[i]=='i' || array[i]=='o' || array[i]=='u'){
					cont++;
				}
			}
			System.out.println("Hay " + cont + " vocales");
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}