import java.io.*;
public class nocheVieja {
	//Escriure un programa en Java que llegeixi per teclat 30 car�cters i els emmagatzemi en un array. Cal que els 30 car�cters es recullin en una variable de tipus String, i convertiu l�String en un array de car�cters. El programa haur� de comptar el nombre de vocals que t� l�array.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			String hora;
			String hora4;
			int hora2;
			int hora3;

			System.out.println("Introduce la hora que es:");
			hora = buffer.readLine();

			hora4 = hora.substring(0,2);
			hora2 = Integer.parseInt(hora4); 
			hora = hora.substring(3,5);
			hora3 = Integer.parseInt(hora);

			while (hora2!=00 || hora3!=00){
				while (hora2>=24 || hora3>=60 || hora2<00 || hora3<00){
					System.out.println("Hora incorrecta!");
					System.out.println("Introduce la hora que es:");
					hora = buffer.readLine();

					hora4 = hora.substring(0,2);
					hora2 = Integer.parseInt(hora4); 
					hora = hora.substring(3,5);
					hora3 = Integer.parseInt(hora);
				}
				if (hora2!=00 || hora3!=00){
					hora2 = 1440-(hora2*60+hora3);
					System.out.println("Faltan " + hora2 + " minutos para las uvas");
					System.out.println("Introduce la hora que es:");
					hora = buffer.readLine();

					hora4 = hora.substring(0,2);
					hora2 = Integer.parseInt(hora4); 
					hora = hora.substring(3,5);
					hora3 = Integer.parseInt(hora);
				}
			}
			System.out.println("Feliz A�o Nuevo y Feliz Navidad Diana!!");
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}