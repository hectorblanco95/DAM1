import java.io.*;
public class ex02 {
	//Escriure un programa en llenguatge Java on es demanin per teclat 6 notes d’alumnes, i es mostri per pantalla el nombre d’aprovats (nota igual o superior a 5), el nombre de condicionats (nota entre 4 i 5) i nombre de suspesos (nota inferior a 4).
	public static void main (String[] args) {
		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame una nota:");
			String nota = buffer.readLine();
			System.out.println("Dame otra nota:");
			String nota2 = buffer.readLine();
			System.out.println("Dame otra nota:");
			String nota3 = buffer.readLine();
			System.out.println("Dame otra nota:");
			String nota4 = buffer.readLine();
			System.out.println("Dame otra nota:");
			String nota5 = buffer.readLine();
			System.out.println("Dame otra nota:");
			String nota6 = buffer.readLine();

			double nota7 = Double.parseDouble(nota);
			double nota8 = Double.parseDouble(nota2);
			double nota9 = Double.parseDouble(nota3);
			double nota10 = Double.parseDouble(nota4);	
			double nota11 = Double.parseDouble(nota5);
			double nota12 = Double.parseDouble(nota6);

			int apro = 0, susp = 0, cond = 0;

			if (nota7>=5){
				apro++;				
			} else if (nota7>=4 && nota7<5){
				cond++;
			} else if (nota7<4){
				susp++;				
			} if (nota8>=5){
				apro++;				
			} else if (nota8>=4 && nota8<5){
				cond++;				
			} else if (nota8<4){
				susp++;				
			} if (nota9>=5){
				apro++;			
			} else if (nota9>=4 && nota9<5){
				cond++;				
			} else if (nota9<4){
				susp++;				
			} if (nota10>=5){
				apro++;				
			} else if (nota10>=4 && nota10<5){
				cond++;				
			} else if (nota10<4){
				susp++;				
			} if (nota11>=5){
				apro++;				
			} else if (nota11>=4 && nota11<5){
				cond++;				
			} else if (nota11<4){
				susp++;				
			} if (nota12>=5){
				apro++;				
			} else if (nota12>=4 && nota12<5){
				cond++;				
			} else if (nota12<4){
				susp++;
			}
			System.out.println("Aprobados: " + apro);
			System.out.println("Condicionados: " + cond);
			System.out.println("Suspendidos: " + susp);

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}
