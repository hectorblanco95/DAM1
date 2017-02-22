import java.io.*;
public class pizza {
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Que pizza deseas: mediana o familiar?");
			String pizza = buffer.readLine();
			String adicional = "";
			String adicional5 = "";
			String queso = "";
			String queso2 = "";
			int adicional2 = 0;
			int adicional4 = 0;
			String adicionalStr = "";
			String adicionalStr2 = "";
			boolean missatge = true;

			int total=0;

			if (pizza.equals("mediana")){
				System.out.println(pizza + " = 4euros");
				total+=4;
				System.out.println("Quieres ingredientes adicionales?");
				adicional = buffer.readLine();
				if (adicional.equals("si")){
					System.out.println("Cuantos?");
					adicionalStr = buffer.readLine();
					adicional2 = Integer.parseInt(adicionalStr);
				}
				if (adicional2>0){
					System.out.println("Ingrdiente adicional = +" + adicional2 + "euros");
					total+=adicional2;
				} else if (adicional.equals("no")){
					System.out.println("Sin ingrdiente adicional");
				} else{
					System.out.println("Error, porfavor escoja los ingredientes correctamente");
					missatge = false;
				}
				System.out.println("Quieres extra de queso?");
				queso = buffer.readLine();
				if (queso.equals("si")){
					System.out.println("Extra de queso = +2euros");
					total+=2;
				} else if (queso .equals("no")){
					System.out.println("Sin extra de queso");	
				} else{
					System.out.println("Error, porfavor escoja los ingredientes correctamente");
					missatge = false;
				}
			}
			else if (pizza.equals("familiar")){
				System.out.println(pizza + " = 9euros");
				total+=9;
				System.out.println("Quieres ingredientes adicionales?");
				adicional5 = buffer.readLine();
				if (adicional5.equals("si")){
					System.out.println("Cuantos?");
					adicionalStr2 = buffer.readLine();
					adicional4 = Integer.parseInt(adicionalStr2);
				} if (adicional4>0){
					System.out.println("Ingrdiente adicional = +" + adicional4*2 + "euros");
					total+=2*adicional4;
				} else if (adicional5.equals("no")){
					System.out.println("Sin ingrdiente adicional");
				} else{
					System.out.println("Error, porfavor escoja los ingredientes correctamente");
					missatge = false;
				}
				System.out.println("Quieres extra de queso?");
				queso2 = buffer.readLine();
				if (queso2 .equals("si")){
					System.out.println("Extra de queso = +3euros");
					total+=3;
				} else if (queso2.equals("no")){
					System.out.println("Sin extra de queso");
				} else{
					System.out.println("Error, porfavor escoja los ingredientes correctamente");
					missatge = false;
				}
			} else{
				System.out.println("Error, porfavor escoja la pizza correctamente");
				missatge = false;
			}
			if (missatge == true) {
				System.out.println("Total= " + total);
			}
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}