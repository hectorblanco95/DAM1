public class ex11 {
	//Programa que visualitzi per pantalla tots els car�cters corresponents a les lletres maj�scules que existeixen en l�abecedari.
	public static void main(String[] args) {

		try{

			char a = 64;
			char b = 90;

			for (int i=a; i<b; i++){
				a++;
				System.out.println(a);
			}
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}