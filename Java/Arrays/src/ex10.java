import java.io.*;
public class ex10 {
	//Escriure un programa en Java que llegeixi per teclat una frase o conjunt de paraules. Cadascuna de les lletres haurà d’estar emmagatzemada en una posició de l’array. El programa serà un cercador. Haurà de cercar una paraula que introduirà l’usuari per teclat, i indicar per pantalla si s’ha trobat aquella paraula o no.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			int cont=0;

			System.out.println("Introduce una frase o conjunto de palabras:");
			h = buffer.readLine();
			h = h.toLowerCase();
			char[] array = h.toCharArray();

			System.out.println("Buscador:");
			h = buffer.readLine();
			h = h.toLowerCase();
			char[] array2 = h.toCharArray();

			int j=0;
			for (int i = 0; i < array.length; i++) { 
				if (j!=array2.length){
					if (array2[j]==array[i]){
						cont++;
						j++;i++;
						if (j!=array2.length){
							if (array2[j]==array[i]){
								cont++;
								j++;
							}
						}
					}
				}
			}
			System.out.println("Contiene " + cont + " letras");
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}