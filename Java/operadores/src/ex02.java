public class ex02 {
	//Escriure un programa en llenguatge Java on es declari una variable amb un nombre de segons, i es mostri per pantalla el seu equivalent en hores, minuts i segons.
	public static void main (String[] args) {

		int op1 = 100;
		int op2 = op1/60;
		int op3 = op1/3600;
		
		System.out.println (op1 + " segons es = " + op1);
		System.out.println (op1 + " minuts es = " + op2);
		System.out.println (op1 + " hores es = " + op3);

	}
}
