import java.io.*;
public class ex02 {
	//Escriure un programa en Java que demani 10 notes d’alumnes per teclat, les mostri per pantalla, i també mostri la nota mitja, la nota més alta i la nota més baixa. Cal utilitzar l’estructura array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			double nota=0;
			double notaMayor=Double.MIN_VALUE;
			double notaMenor=Double.MAX_VALUE;
			String h;
			double[] array = new double[10];

			for (int i = 0; i < array.length; i++) {
				System.out.println("Introduce una nota:");
				h = buffer.readLine();
				array[i] = Double.parseDouble(h);  
				while (array[i]>10 || array[i]<0){
					System.out.println("NOTA NO VALIDA!");
					System.out.println("Introduce una nota:");
					h = buffer.readLine();
					array[i] = Double.parseDouble(h); 
				}
				if (array[i]>notaMayor){
					notaMayor=array[i];
					
				} if (array[i]<notaMenor){
					notaMenor=array[i];
					
				}
				nota=nota+array[i];
			}
			System.out.println("Media: " + nota/array.length);
			System.out.println("Nota mes alta: " + notaMayor);
			System.out.println("Nota mes baixa: " + notaMenor);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}