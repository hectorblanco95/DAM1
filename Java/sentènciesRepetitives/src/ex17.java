import java.io.*;
public class ex17 {
	//Programa que llegeixi un nombre enter de 5 xifres i mostri les seves xifres igual que en l’exemple.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero de 5 xifres:");
			String a = buffer.readLine();

			int num = Integer.parseInt(a);
		
			
			int j=10000;
			
			

			for (int i=0; i<5; i++){
				
				   num=num/j;

				System.out.println(num);
				  
		         j=j/10;
		         num=num/j;
		         System.out.println(num);
		
			}
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
