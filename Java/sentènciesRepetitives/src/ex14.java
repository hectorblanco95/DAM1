import java.io.*;
public class ex14 {
	//Demanar nombres per teclat fins que se n’introdueixi un de negatiu, i calcular la mitja de tots ells menys l’últim nombre introduït, és a dir, el nombre negatiu.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);
			int contador=0;
			int numTotal=0;

			while (num>=0){
				contador++;
				numTotal=numTotal+num;

				System.out.println("Dame un numero:");
				String b = buffer.readLine();

				num = Integer.parseInt(b);
			}
			System.out.println("Media de los numeros= " + numTotal/contador);
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}