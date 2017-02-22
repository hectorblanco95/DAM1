import java.io.*;
public class ex005 {
	//Leer el nombre y sueldo de 20 empleados y mostrar el nombre y sueldo del empleado que más gana.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String h;
			int nom2=0;
			double sueldoMayor=Double.MIN_VALUE;
			String[] noms = new String[20];
			double[] sueldo = new double[20];

			for (int i = 0; i < 20; i++) {
				System.out.println("Introduce el nombre del empleado:");
				noms[i] = buffer.readLine();
				System.out.println("Introduce el sueldo del empleado:");
				h = buffer.readLine();
				sueldo[i] = Double.parseDouble(h);
				if (sueldo[i]>sueldoMayor){
					sueldoMayor=sueldo[i];
					nom2=i;
				}
			}
			System.out.println("Nombre del empleado que más gana: " + noms[nom2]);
			System.out.println("Sueldo del empleado que más gana: " + sueldoMayor);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}