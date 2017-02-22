import java.io.*;
public class ex15{
	//Escriure un programa en llenguatge Java on es demani per teclat la data de naixement d’una persona (dia, mes, any) i calculi el seu número de la sort. El número de la sort es calcula sumant el dia, el mes i l’any de la data de naixement, i a continuació cal sumar un cop les xifres obtingudes en la suma. Per exemple, si la data de naixement es 12/07/1980, calcularem el nombre de la sort de la següent manera: 12+7+1980 = 1999 1+9+9+9 = 28. Nombre de la sort: 28.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un dia:");
			String dia = buffer.readLine();
			System.out.println("Dame un mes:");
			String mes = buffer.readLine();
			System.out.println("Dame un año");
			String año = buffer.readLine();

			int dia2 = Integer.parseInt(dia);
			int mes2 = Integer.parseInt(mes);
			int año2 = Integer.parseInt(año);
			
			int numerosort=dia2+mes2+año2;
			int numerosort2=(numerosort/1000);
			int modul=(numerosort%1000);
			int numerosort3=(modul/100);
			int modul2=(modul%100);
			int numerosort4=(modul2/10);
			int modul3=(modul2%10);
			int numerosort5=(modul3/1);
			int numerosort6=numerosort2+numerosort3+numerosort4+numerosort5;
			
			System.out.println("Tu número de la suerte es: " + numerosort6);	

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}