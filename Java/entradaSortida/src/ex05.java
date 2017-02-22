import java.io.*;
public class ex05 {
	//Escriure un programa en llenguatge Java on es demani per teclat un nombre. El programa haurà de calcular i mostrar per pantalla la seva taula de sumar i la seva taula de multiplicar. 
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una numero?");
			String num = buffer.readLine();

			int num2 = Integer.parseInt(num);

			for(int i=0; i<=10; i++){
				for(int j=num2; j<=10; j++){
					System.out.println(i + " * " + j + " = " + (i*j));
				}
				System.out.println();
			}
			for(int i=0; i<=10; i++){
				for(int j=num2; j<=10; j++){
					System.out.println(i + " + " + j + " = " + (i+j));
				}
				System.out.println();
			}
		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}

