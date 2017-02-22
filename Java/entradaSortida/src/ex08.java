import java.io.*;
import java.text.DecimalFormat;
public class ex08 {
	//Escriure un programa en llenguatge Java on es demani per teclat un valor en € i es calculi l’equivalent en $ i ¥ (iens).
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un valor en euros (€)");
			String euros = buffer.readLine();

			double euros2 = Double.parseDouble(euros);
			double dolares = euros2*1.1222;
			double iens = euros2*112.55;

			DecimalFormat dec = new DecimalFormat ("0.00");

			System.out.println(euros2+ "€" + " = " + (dec.format(dolares)) + "$");
			System.out.println(euros2+ "€" + " = " + (dec.format(iens)) + "¥");

		}

		catch (Exception e){

			System.out.println("Error al introducir el numero");

		}	
	}
}
