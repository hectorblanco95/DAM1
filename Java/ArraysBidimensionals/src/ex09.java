import java.io.*;
public class ex09 {

	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			byte v=1;

			while(v !=0){
				System.out.println(" **** MENU PRINCIPAL **** ");
				System.out.println(" ------------------------ ");
				System.out.println(" Elige opcion:");
				System.out.println("    [1] - NIVEL FÁCIL");
				System.out.println("    [2] - NIVEL MEDIO");
				System.out.println("    [3] - NIVEL AVANZADO");
				System.out.println("    [0] - SALIR");
				v = Byte.parseByte(buffer.readLine());

				switch(v){

				case 1:
					byte[][] matrix = new byte[3][3];
					byte num=0;
					for (int i = 0; i < matrix.length; i++) {
						matrix[i][(byte) (Math.random()*3)]=1;
					}
					for (int i = 0; i < matrix.length; i++) {
						System.out.println("Dame un numero de entrada, para la puerta " + i +":");
						num = Byte.parseByte(buffer.readLine());
						while (num>2 || num<0){
							System.out.println("Numero de entrada incorrecto!");
							System.out.println("Dame un numero de entrada, para la puerta " + i +":");
							num = Byte.parseByte(buffer.readLine());
						}
						while (matrix[i][num]!=1){
							System.out.println("Numero de entrada incorrecto!");
							System.out.println("Dame un numero de entrada, para la puerta " + i +":");
							num = Byte.parseByte(buffer.readLine());
							while (num>2 || num<0){
								System.out.println("Numero de entrada incorrecto!");
								System.out.println("Dame un numero de entrada, para la puerta " + i +":");
								num = Byte.parseByte(buffer.readLine());
							}
						}
						System.out.println("Numero de entrada correcto!");
					}
					System.out.println("NIVEL FÁCIL SUPERADO!");
					for (int i = 0; i < matrix.length; i++) {

						for (int j = 0; j < matrix[i].length; j++) {
							System.out.print(matrix[i][j]);
						}
						System.out.println();
					}
					break;

				case 2:
					byte[][] matrix2 = new byte[3][3];
					byte num2=0;
					for (int i = 0; i < matrix2.length; i++) {
						matrix2[i][(byte) (Math.random()*3)]=1;
					}
					for (int i = 0; i < matrix2.length; i++) {
						System.out.println("Dame un numero de entrada, para la puerta " + i +":");
						num2 = Byte.parseByte(buffer.readLine());
						while (num2>2 || num2<0){
							System.out.println("Numero de entrada incorrecto!");
							System.out.println("Dame un numero de entrada, para la puerta " + i +":");
							num2 = Byte.parseByte(buffer.readLine());
						}
						while (matrix2[i][num2]!=1){
							System.out.println("Numero de entrada incorrecto!");
							if(i!=0){
								i--;
							}
							System.out.println("Dame un numero de entrada, para la puerta " + i +":");
							num2 = Byte.parseByte(buffer.readLine());
							while (num2>2 || num2<0){
								System.out.println("Numero de entrada incorrecto!");
								System.out.println("Dame un numero de entrada, para la puerta " + i +":");
								num2 = Byte.parseByte(buffer.readLine());
							}
						}
						System.out.println("Numero de entrada correcto!");
					}
					System.out.println("NIVEL MEDIO SUPERADO!");
					for (int i = 0; i < matrix2.length; i++) {

						for (int j = 0; j < matrix2[i].length; j++) {
							System.out.print(matrix2[i][j]);
						}
						System.out.println();
					}
					break;

				case 3:
					byte[][] matrix3 = new byte[3][3];
					byte num3=0;
					byte cont=0;
					for (int i = 0; i < matrix3.length; i++) {
						matrix3[i][(byte) (Math.random()*3)]=1;
					}
					for (int i = 0; i < matrix3.length && cont!=7; i++) {
						System.out.println("Dame un numero de entrada, para la puerta " + i +":");
						num3 = Byte.parseByte(buffer.readLine());
						while (num3>2 || num3<0){
							System.out.println("Numero de entrada incorrecto!");
							System.out.println("Dame un numero de entrada, para la puerta " + i +":");
							num3 = Byte.parseByte(buffer.readLine());
						}
						cont++;
						while (matrix3[i][num3]!=1 && cont!=7){
							System.out.println("Numero de entrada incorrecto!");
							if(i!=0){
								switch(i){
								case 1:		
									for (int k=0; k<3; k++){
										matrix3[0][k] = 0;
									}
									matrix3[0][(byte) (Math.random()*3)]=1;	
									break;

								case 2:
									for (int k=0; k<3; k++){
										matrix3[1][k] = 0;
									}
									matrix3[1][(byte) (Math.random()*3)]=1;	
									break;
								}	
							}
							System.out.println("Dame un numero de entrada, para la puerta " + i +":");
							num3 = Byte.parseByte(buffer.readLine());
							while (num3>2 || num3<0){
								System.out.println("Numero de entrada incorrecto!");
								System.out.println("Dame un numero de entrada, para la puerta " + i +":");
								num3 = Byte.parseByte(buffer.readLine());
							}
							cont++;
						}
						if(matrix3[i][num3]==1){
							System.out.println("Numero de entrada correcto!");
						}
					}
					if (cont==7){
						System.out.println("GAME OVER!");
					} else{
						System.out.println("NIVEL AVANZADO SUPERADO!");
					}
					for (int i = 0; i < matrix3.length; i++) {

						for (int j = 0; j < matrix3[i].length; j++) {
							System.out.print(matrix3[i][j]);
						}
						System.out.println();
					}
					break;
				case 0:
					break;

				default:
					System.out.println("Opcinon no valida, introduce una opcion correcta!");
					System.out.println();
					break;
				}
			}	
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}