import java.io.*;
public class ex003 {
	//Leer 10 enteros y mostrar la media de los valores negativos y la de los positivos.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int num2=0;
			int num3=0;
			int cont=0;
			int cont2=0;
			String h;
			int[] array = new int[10];

			for (int i = 0; i < array.length; i++) {
				System.out.println("Introduce un numero:");
				h = buffer.readLine();
				array[i] = Integer.parseInt(h);  
				if (array[i]>=0){
					cont++;
					num2=num2+array[i];
				} if (array[i]<0){
					cont2++;
					num3=num3+array[i];
				} 
			}
			if (cont==0){
				System.out.println("Media positivos: 0");
			} else{
				System.out.println("Media positivos: " + num2/cont);
			}
			if (cont2==0){
				System.out.println("Media negativos: 0");
			} else{
				System.out.println("Media negativos: " + num3/cont2);	
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}