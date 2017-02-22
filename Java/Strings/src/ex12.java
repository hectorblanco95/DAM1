import java.io.*;
public class ex12 {
	//Verificar si una cadena de text emmagatzemada en un String, és un NIF correcte o no. Si ho és, es mostrarà per consola la seva part numèrica; si no ho és, es mostrarà el missatge "NIF no vàlid".
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce un NIF:");
			String a = buffer.readLine();

			int var1 = a.length();
			char b=0;
			int cont=-1;
			System.out.println("Longitud del NIF: '" + a + "' és " + var1);

			if (var1!=9){
				System.out.println("NIF no vàlid! Introduce el NIF correctamente");
			}
			else{
				if(!Character.isLetter(a.charAt(8))){
					System.out.println("NIF no vàlid! El último caràcter debe ser una letra");
				}else if(Character.isLetter(a.charAt(8))){
					b=a.charAt(8);
				}
				for(int i=0; i<8; i++){
					cont++;
					if(!Character.isDigit(a.charAt(cont))){
						System.out.println("NIF no vàlid! Los primeros 8 caràcter deben ser numeros");
					}
				}
				if(var1==9 && cont==7 && b==a.charAt(8)){
					System.out.println("NIF correcto!");
				}
			}
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}
