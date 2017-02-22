public class ex06 {
	//Escriure un programa en llenguatge Java on es declarin tres variables, que contindran el valor de cadascun dels seus costats (a, b i c) i calculi la seva àrea.
	public static void main (String[] args) {

		double a = 21;
		double b = 32;
		double c = 50;
		double p = (a+b+c)/2;
		double area = Math.sqrt(p * (p - a) * (p - b) * (p - c));
		
		System.out.println ("area = " + area);
	}
}
