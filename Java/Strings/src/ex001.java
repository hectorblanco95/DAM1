public class ex001 {
	//Programa que llegeixi un nombre enter de 5 xifres i mostri les seves xifres igual que en l’exemple.
	public static void main(String[] args) {

		try{
			String Str = new String("Welcome");
			String Str2 = new String("Welcome to my program");
			int j=0;

			System.out.println("Return Value :" );
			for (int i=0; i<21; i++){
				j++;

				System.out.print(Str.substring(i,j));
				System.out.print(Str2.substring(i,j));
				if (i>7 && j>7){
				System.out.print(Str2.substring(j));
				}
			}
		}
		catch (Exception e){

			System.out.println("Error");
		}
	}
}