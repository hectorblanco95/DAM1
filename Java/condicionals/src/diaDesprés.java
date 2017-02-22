import java.io.*;
public class diaDesprés {
	//Pedir una fecha por teclado (día, mes y año por separado, formato números) e indicar cuál es el día después.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un día:");
			String a = buffer.readLine();
			System.out.println("Dame un mes:");
			String b = buffer.readLine();
			System.out.println("Dame un año:");
			String c = buffer.readLine();

			int dia = Integer.parseInt(a);
			int mes = Integer.parseInt(b);
			int año = Integer.parseInt(c);
			int bisiesto=0;
			int bisiesto2=0;
			
			if ((año % 4 == 0) && ((año % 100 != 0) || (año % 400 == 0))){
				bisiesto=año;
			} else{
				bisiesto2=año;;
			}

			if (dia>0 && dia<29 && mes==2 && año==bisiesto){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia+1) + "/" + mes + "/" + año);
			} else if (dia==29 && mes==2 && año==bisiesto){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-28) + "/" + (mes+1) + "/" + año);
			} else if (dia>0 && dia<30 && mes==4 || mes==6 || mes==9 || mes==11 && año==bisiesto){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia+1) + "/" + mes + "/" + año);
			} else if (dia==30 && mes==4 || mes==6 || mes==9 || mes==11 && año==bisiesto){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-29) + "/" + (mes+1) + "/" + año);
			} else if (dia>0 && dia<31 && mes==1 || mes==3 || mes==5 || mes==7 || mes==8 || mes==10 || mes==12 && año==bisiesto){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia+1) + "/" + mes + "/" + año);
			} else if (dia==31 && mes==1 || mes==3 || mes==5 || mes==7 || mes==8 || mes==10 || mes==12 && año==bisiesto){
				if (mes==12){
					System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-30) + "/" + (mes-11) + "/" + (año+1));
				}
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-30) + "/" + (mes+1) + "/" + año);
			} else if (dia>0 && dia<28 && mes==2 && año==bisiesto2){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia+1) + "/" + mes + "/" + año);
			} else if (dia==28 && mes==2 && año==bisiesto2){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-27) + "/" + (mes+1) + "/" + año);
			} else if (dia>0 && dia<30 && mes==4 || mes==6 || mes==9 || mes==11 && año==bisiesto2){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia+1) + "/" + mes + "/" + año);
			} else if (dia==30 && mes==4 || mes==6 || mes==9 || mes==11 && año==bisiesto2){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-29) + "/" + (mes+1) + "/" + año);
			} else if (dia>0 && dia<31 && mes==1 || mes==3 || mes==5 || mes==7 || mes==8 || mes==10 || mes==12 && año==bisiesto2){				
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia+1) + "/" + mes + "/" + año);
			} else if (dia==31 && mes==1 || mes==3 || mes==5 || mes==7 || mes==8 || mes==10 || mes==12 && año==bisiesto2){
				if (mes==12){
					System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-30) + "/" + (mes-11) + "/" + (año+1));
				}
				System.out.println(dia + "/" + mes + "/" + año + " El dia después és: " + (dia-30) + "/" + (mes+1) + "/" + año);
			} else{
				System.out.println("Error, introduce la fecha correctamente");
			}

		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}
