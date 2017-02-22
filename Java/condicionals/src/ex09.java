import java.io.*;
public class ex09{
	//Escriure un programa en llenguatge Java on es demanin les dades de 5 alumnes: edat i al�ada. El programa haur� de mostrar per pantalla un missatge de text que defineixi l�edat mitja de tots els alumnes, l�al�ada mitja de tots els alumnes, la quantitat d�alumnes m�s grans de 18 anys i la quantitat d�alumnes que mesuren m�s de 1,70m.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame la edad de un alumno:");
			String edad = buffer.readLine();
			System.out.println("Dame la altura de un alumno:");
			String altura = buffer.readLine();
			System.out.println("Dame la edad de otro alumno:");
			String edad2 = buffer.readLine();
			System.out.println("Dame la altura de otro alumno:");
			String altura2 = buffer.readLine();
			System.out.println("Dame la edad de otro alumno:");
			String edad3 = buffer.readLine();
			System.out.println("Dame la altura de otro alumno:");
			String altura3 = buffer.readLine();
			System.out.println("Dame la edad de otro alumno:");
			String edad4 = buffer.readLine();
			System.out.println("Dame la altura de otro alumno:");
			String altura4 = buffer.readLine();
			System.out.println("Dame la edad de otro alumno:");
			String edad5 = buffer.readLine();
			System.out.println("Dame la altura de otro alumno:");
			String altura5 = buffer.readLine();


			double edad6 = Double.parseDouble(edad);
			double altura6 = Double.parseDouble(altura);
			double edad7 = Double.parseDouble(edad2);
			double altura7 = Double.parseDouble(altura2);
			double edad8 = Double.parseDouble(edad3);
			double altura8 = Double.parseDouble(altura3);
			double edad9 = Double.parseDouble(edad4);
			double altura9 = Double.parseDouble(altura4);
			double edad10 = Double.parseDouble(edad5);
			double altura10 = Double.parseDouble(altura5);


			int mas18=0;
			int mas170=0;



			double mediaEdad =  ((edad6+edad7+edad8+edad9+edad10)/5);
			System.out.println("La media de edad es: " + mediaEdad);
			double mediaAltura = ((altura6+altura7+altura8+altura9+altura10)/5);
			System.out.println("La media de altura es: " + mediaAltura);


			if(edad6>=18){
				mas18++;				
			} if(edad7>=18){
				mas18++;					
			} if(edad8>=18){
				mas18++;				
			} if(edad9>=18){
				mas18++;			
			} if(edad10>=18){
				mas18++;			
			} if(altura6>=1.70){
				mas170++;				
			} if(altura7>=1.70){
				mas170++;			
			} if(altura8>=1.70){
				mas170++;				
			} if(altura9>=1.70){
				mas170++;			
			} if(altura10>=1.70){
				mas170++;				
			}
			System.out.println(mas18 + " Mayores de 18");
			System.out.println(mas170 + " Mayores de 1,70");
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}