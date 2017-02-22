import java.io.*;
public class ex04 {
	//Escriure un programa en llenguatge Java on es demanin per teclat dos nombres. El programa haurà de calcular la seva suma, resta, multiplicació, divisió i mòdul, i mostrar el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una numero?");
			String num = buffer.readLine();
			System.out.println("Dame otro numero?");
			String num2 = buffer.readLine();
			int num3 = Integer.parseInt(num);
			int num4 = Integer.parseInt(num2);
			System.out.println("La suma es = " + (num3+num4));
			System.out.println("La resta es = " + (num3-num4));
			System.out.println("La multiplicació es = " + (num3*num4));
			System.out.println("La divisió es = " + (num3/num4));
			System.out.println("La mòdul es = " + (num3%num4));
		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
