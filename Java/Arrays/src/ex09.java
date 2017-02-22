import java.io.*;
public class ex09 {
	//Escriure un programa en Java que llegeixi per teclat 30 caràcters seguits que emmagatzemareu en un array i després els posi en un array. El programa haurà de comptar el nombre de vocals que té l’array, indicant el nombre de lletres de cada tipus (nombre de as, nombre de es...).
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			int contA=0;
			int contE=0;
			int contI=0;
			int contO=0;
			int contU=0;
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
				if (array[i]=='a'){
					contA++;
				} if (array[i]=='e'){
					contE++;
				} if (array[i]=='i'){
					contI++;
				} if (array[i]=='o'){
					contO++;
				} if (array[i]=='u'){
					contU++;
				}
			}
			System.out.println("Hay " + contA + " vocales as");
			System.out.println("Hay " + contE + " vocales es");
			System.out.println("Hay " + contI + " vocales is");
			System.out.println("Hay " + contO + " vocales os");
			System.out.println("Hay " + contU + " vocales us");
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}