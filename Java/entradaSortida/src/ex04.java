import java.io.*;
public class ex04 {
	//Escriure un programa en llenguatge Java on es demanin per teclat dos nombres. El programa haur� de calcular la seva suma, resta, multiplicaci�, divisi� i m�dul, i mostrar el resultat per pantalla amb un missatge de text.
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
			System.out.println("La multiplicaci� es = " + (num3*num4));
			System.out.println("La divisi� es = " + (num3/num4));
			System.out.println("La m�dul es = " + (num3%num4));
		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
