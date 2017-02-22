public class ex001 {
	//Guardar en un array los 20 primeros nuÌ�meros pares.
	public static void main(String[] args) {

		try{
			 int[] array = new int[21];
			 for (int i = 1; i < array.length; i++) {
		         array[i]=i*2;   
				 System.out.print(array[i] + " ");
					
		        }
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}