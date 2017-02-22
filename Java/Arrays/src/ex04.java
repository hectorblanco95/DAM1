import java.io.*;
public class ex04 {
	//Escriure un programa en Java que llegeixi una paraula per teclat, i el programa digui si �s un pal�ndrom o no. Cal utilitzar l�estructura array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			System.out.println("Introduce un palabra");
			String palabra=buffer.readLine();

			char[] letra= palabra.toCharArray();
			int j=letra.length-1;
			boolean l=false;

			for(int i=0;i<letra.length && l==false;i++, j--){
				if(letra[i]!=letra[j]){
					l=true;
				}
			}
			if(l==false){
				System.out.println("�s palindromo");
			}else System.out.println("No �s palindromo");
			
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}