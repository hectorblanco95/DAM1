import java.io.*;
public class ex12{
	//Un treballador necessita calcular el seu sou setmanal, el qual s’obté de la següent manera: Si treballa 40 hores o menys, se li paguen 16€ cada hora. Si treballa més de 40 hores, se li paguen 16€ per cadascuna de les primeres 40 hores i 20€ per cada hora extra. Escriure un programa en llenguatge Java on es demanin per teclat les hores setmanals treballades, i es mostri per pantalla el seu sou setmanal.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Cuantas horas has trabajado?");
			String hores = buffer.readLine();

			double hores2 = Double.parseDouble(hores);

			if (hores2<=40){				
				System.out.println("El sueldo semanal es: " + hores2*16);
			} else if (hores2>40){				
				System.out.println("El sueldo semanal es: " + (((hores2-40)*20)+(40*16)));
			}

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}