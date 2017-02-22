
public class ex04 {
	//Escriure un programa en llenguatge Java on es declari una variable amb el radi d’una circumferència i calculi i mostri per pantalla la longitud i l’àrea de la circumferència.
	public static void main (String[] args) {

		double radi = 20;
		double longitud = 2*Math.PI*radi;
		double area = Math.PI*Math.pow(radi, 2);
		System.out.println ("radi = " + radi);
		System.out.println ("longitud = " + longitud);
		System.out.println ("area = " + area);
	}
}
