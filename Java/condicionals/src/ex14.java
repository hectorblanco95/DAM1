import java.io.*;
public class ex14{
	//Escriure un programa en llenguatge Java on es demani un mes i un any per teclat i es mostri el nombre de dies que té aquest mes (cal tenir especial compte amb el mes de febrer i els anys de traspàs).
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un mes:");
			String mes = buffer.readLine();
			System.out.println("Dame un año");
			String año = buffer.readLine();

			int mes2 = Integer.parseInt(mes);
			int año2 = Integer.parseInt(año);
			int bisiesto=0;
			int bisiesto2=0;
			
			if ((año2 % 4 == 0) && ((año2 % 100 != 0) || (año2 % 400 == 0))){
				bisiesto=año2;
			} else{
				bisiesto2=año2;;
			}

			if (mes2==2 && año2==bisiesto){				
				System.out.println("El mes " + mes2 + " del " + año2 + " tiene 29 días");
			} else if (mes2==4 || mes2==6 || mes2==9 || mes2==11 && año2==bisiesto){				
				System.out.println("El mes " + mes2 + " del " + año2 + " tiene 30 días");
			} else if (mes2==1 || mes2==3 || mes2==5 || mes2==7 || mes2==8 || mes2==10 || mes2==12 && año2==bisiesto){				
				System.out.println("El mes " + mes2 + " del " + año2 + " tiene 31 días");
			} else if (mes2==2 && año2==bisiesto2){				
				System.out.println("El mes " + mes2 + " del " + año2 + " tiene 28 días");
			} else if (mes2==4 || mes2==6 || mes2==9 || mes2==11 && año2==bisiesto2){				
				System.out.println("El mes " + mes2 + " del " + año2 + " tiene 30 días");
			} else if (mes2==1 || mes2==3 || mes2==5 || mes2==7 || mes2==8 || mes2==10 || mes2==12 && año2==bisiesto2){				
				System.out.println("El mes " + mes2 + " del " + año2 + " tiene 31 días");
			}  
			

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}