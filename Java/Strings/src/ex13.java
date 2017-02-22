import java.io.*;
public class ex13 {
	public static void main(String[] args) throws IOException{

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Introduce un nombre:");
			String nom = buffer.readLine();
			System.out.println("Introduce los apellidos:");
			String apellido = buffer.readLine();
			System.out.println("Introduce el a�o de nacimiento:");
			String c = buffer.readLine();
			System.out.println("Introduce la nota media del ciclo:");
			String d = buffer.readLine();

			int edad = Integer.parseInt(c);
			double notaMedia = Double.parseDouble(d);
			int menu = 0;
			int actual = 0;
			double notaMedia2 = 0;
			double notaMedia3 = 0;
			double mediaTotal = 0;

			while(menu !=7){

				System.out.println("MENU");
				System.out.println("1 Nombre y Apellido");
				System.out.println("2 Edad");
				System.out.println("3 Nota media");
				System.out.println("4 Nota compa�eros");
				System.out.println("5 Informacion personal");
				System.out.println("6 Nombre compa�eros");
				System.out.println("7 Exit");
				menu=Integer.parseInt(buffer.readLine());

				switch (menu) {
				case 1:
					System.out.println(nom + " " + apellido);
					break;

				case 2:
					System.out.println(edad);
					actual=2016-edad;
					if(actual > 18){
						System.out.println("Es mayor de edad");
					} else{
						System.out.println("Es menor de edad");
					}
					break;

				case 3:
					if(notaMedia>=5 && notaMedia<6){
						System.out.println("Suficiente");
					}else if(notaMedia >=6 && notaMedia<7){
						System.out.println("Bien");
					}else if(notaMedia >=7 && notaMedia<9){
						System.out.println("Notable");
					}else if(notaMedia >=9 && notaMedia<=10){
						System.out.println("Excelente");
					}else if(notaMedia>10){
						System.out.println("Nota media erronea");
					}else{
						System.out.println("Suspendido");
					}
					break;

				case 4:
					System.out.println("Nota media Compa�ero 1");
					String compa�ero1 = buffer.readLine();
					notaMedia2 = Double.parseDouble(compa�ero1);

					System.out.println("Nota media Compa�ero 2");
					String compa�ero2 = buffer.readLine();
					notaMedia3 = Double.parseDouble(compa�ero2);

					mediaTotal = (notaMedia + notaMedia2 + notaMedia3) / 3;

					System.out.println("Nota media de los tres compa�eros es: " + mediaTotal);

					if(notaMedia > notaMedia2 && notaMedia > notaMedia3){
						System.out.println("La nota m�s alta �s " + notaMedia);
					} else if(notaMedia2 > notaMedia && notaMedia2 > notaMedia3){
						System.out.println("La nota m�s alta �s " + notaMedia2);
					}else{
						System.out.println("La nota m�s alta �s " + notaMedia3);
					}

					if(notaMedia < notaMedia2 && notaMedia < notaMedia3){
						System.out.println("La nota m�s baja �s " + notaMedia);
					} else if(notaMedia2 < notaMedia && notaMedia2 < notaMedia3){
						System.out.println("La nota m�s baja �s " + notaMedia2);
					}else{
						System.out.println("La nota m�s baja �s " + notaMedia3);
					}
					break;

				case 5:
					int longitud= nom.length();
					System.out.println("El nombre " + nom + " tiene " + longitud + " car�cteres");

					System.out.println("La letra inicial del nombre es: " + nom.charAt(0));
					System.out.println("La letra inicial del apellido es: " + apellido.charAt(0));
					break;

				case 6:

					System.out.println("Introduce nombre compa�ero 1");
					String ncomp = buffer.readLine();


					System.out.println("Introduce apelido");
					String acomp = buffer.readLine();


					System.out.println("Introduce nombre compa�ero 2");
					String ncomp2 = buffer.readLine();

					System.out.println("Introduce apellido");
					String acomp2 = buffer.readLine();

					if(ncomp.contentEquals(ncomp2)){
						System.out.println("Los dos nombres son iguales");
					}else {
						System.out.println("Los nombres no son iguales");
					}if(acomp.contentEquals(acomp2)){
						System.out.println("Los dos apellidos son iguales");
					}else {
						System.out.println("Los apellidos no son iguales");
					}
					break;

				default:
					break;
				}
			}	
		}

		catch (Exception e){

			System.out.println("ERROR");
		}	
	}
}