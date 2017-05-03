public class ElectroApp {

	public static void main (String[] args){
		
		Electro e = new Electro(150, "negro", 'G', 30);
		System.out.println("Precio final del electrodomestico de color "+e.getColor()+": "+e.precioFinal()+" €");
	}
}