import java.io.*;
public class ex17 {
	//Escriure un programa en llenguatge Java on es demani per teclat una nota d’un examen i mostri per pantalla amb un missatge de text quina és la seva qualificació. La qualificació podrà ser: Suspens (0-4,99), Aprovat (5-6,99), Notable (7-8,99), Excel·lent (9-9,99) o Matrícula d’Honor (10).
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una nota:");
			String nota = buffer.readLine();
			
			double nota2 = Double.parseDouble(nota);
			
			if (nota2>=0 && nota2<5){
				System.out.println("Suspendido: " + nota2);
			} else if(nota2>=5 && nota2<7){
				System.out.println("Aprobado: " + nota2);
			} else if(nota2>=7 && nota2<9){
				System.out.println("Notable: " + nota2);
			} else if(nota2>=9 && nota2<10){
				System.out.println("Excelente: " + nota2);
			} else if (nota2==10){
				System.out.println("Matricula de honor: " + nota2);
			} else{
				System.out.println("No existe la nota");
			}
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}
