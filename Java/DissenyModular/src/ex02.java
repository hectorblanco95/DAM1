import java.io.*;
// Realizar un programa con un método, al que se le pase como parámetro un número N, y muestre por pantalla N veces, el mensaje: “Este mensaje se mostrará N veces”.
public class ex02 {
	// Método principal de la clase Calculadora que se ejecuta al principio
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
			System.out.println("Este mensaje se mostrará " +  n  + " veces");
		}
	
	}
}