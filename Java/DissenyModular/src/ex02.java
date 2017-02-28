import java.io.*;
// Realizar un programa con un m�todo, al que se le pase como par�metro un n�mero N, y muestre por pantalla N veces, el mensaje: �Este mensaje se mostrar� N veces�.
public class ex02 {
	// M�todo principal de la clase Calculadora que se ejecuta al principio
	public static void main (String[] args){
		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			
			System.out.println("Introduce un numero, para que el mensaje se repita:");
			int n = Integer.parseInt(buffer.readLine());

			repe(n);
			 
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
	
	public static void repe (int n) {

		for(int i=0;i<n;i++){
			System.out.println("Este mensaje se mostrar� " +  n  + " veces");
		}
	
	}
}