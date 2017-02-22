import java.io.*;
public class ex10{
	// Escriure un programa en Java que, en funció del que gasta un client en una compra, es fa un descompte determinat. Si la compra és superior a 25€, 10% de descompte, si és superior a 50€, 15% de descompte, i si és superior a 100€, 30% de descompte. Demanar l'import de la compra per teclat i mostrar el resultat amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un precio:");
			String num = buffer.readLine();

			double num2 = Double.parseDouble(num);

			double a=num2*10/100;
			double b=num2*15/100;
			double c=num2*30/100;

			if (num2>=25 && num2<50){				
				System.out.println("10% de " + num2 + " = " + (num2-a));
			} if (num2>=50 && num2<100){
				System.out.println("15% de " + num2 + " = " + (num2-b));
			} if (num2>=100){
				System.out.println("30% de " + num2 + " = " + (num2-c));
			} else {
				System.out.println("No se aplica ningún descuento: " + num2);
			}

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}