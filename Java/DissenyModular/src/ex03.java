import java.io.*;
// Dise�ar un programa que tenga un m�todo cuyos par�metros sean dos n�meros, y que calcule el m�ximo.
public class ex03 {
	// M�todo principal de la clase Calculadora que se ejecuta al principio
	public static void main (String[] args){
		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			
			System.out.println("Introduce un numero:");
			int n = Integer.parseInt(buffer.readLine());
			System.out.println("Introduce un numero:");
			int x = Integer.parseInt(buffer.readLine());

			int numMax=Integer.MIN_VALUE;
			
			numMax=max(n, x, numMax);
			System.out.println("N�mero M�ximo: " + numMax);
			 
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
	
	static int max (int n, int x, int numMax) {

		if(n>numMax){
			numMax=n;
		} else if(x>numMax){
			numMax=x;
		}
		
		return numMax;
	}
}