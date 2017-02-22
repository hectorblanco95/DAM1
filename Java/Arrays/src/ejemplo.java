import java.io.*;
public class ejemplo {
	//ejemplos
	public static void main(String[] args) {
		try{
			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			int a;
			a = 0;
			int valor = 0;

			int[] array = new int[10];

			array[9] = 4;

			valor = array[8];

			// System.out.println(valor);

			int[] notes1 = { 5, 6, 7, 9, 6, 4, 3, 8, 7, 1};

			int[] notes = new int[5];

			for (int i = 0; i < notes.length; i++) {
				valor = Integer.parseInt(buffer.readLine());
				notes [i] = valor;
			}

			int i = 0;
			while(i < notes.length){

				if(i == notes.length - 1){
					System.out.print(notes[i]);
				}
				else{
					System.out.print(notes[i]);
					System.out.print(" - ");
				}
				i++;
			}
		}
		catch (Exception e){

			System.out.println("Error al introducir tu nombre o tu edad");
		}	
	}
}
