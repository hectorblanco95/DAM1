import java.io.*;
public class ex13 {
	//Demanar un nombre per teclat i indicar si �s positiu o negatiu. L�usuari podr� introduir nombres fins que escrigui un 0. 
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);

			while (num!=0){
				if (num>0){
					System.out.println("Es positivo");
				} else if (num<0){
					System.out.println("Es negativo");
				}
				System.out.println("Dame un numero:");
				String b = buffer.readLine();

				num = Integer.parseInt(b);
			}
			System.out.println("Es 0");
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}