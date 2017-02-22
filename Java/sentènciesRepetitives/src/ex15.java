import java.io.*;
public class ex15 {
	public static void main (String[] args) {
		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce un numero entre 0 y 99999:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);
			int contador =0;
			int divi=0; 

			if(num>99999){
				System.out.println("numero erroneo");
			}
			while(num != 0){

				num = num / 10;
				divi = num;
				contador++;
			}
			if(num<=99999){
				System.out.println("El numero tiene " + contador + " xifras");
			}
		}

		catch (Exception e){

			System.out.println("Lo siento ocurrio un error fatal");									
		}
	}
}