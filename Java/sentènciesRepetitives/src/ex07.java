public class ex07 {
	//Escriure un programa en Java que multipliqui els 20 primers nombres naturals (1*2*3*4*5...).
	public static void main(String[] args) {
		int j=0;
		int a=0;
		for (int i=0; i<=20; i++){
			j++;
			if (j<=20){
				a=i*j;
				System.out.println(i + "*" + j + "= " + a);
			}
		}
	}
}
