import java.io.*;
public class ex04{
	//Escriure un programa en llenguatge Java on es demanin 10 valors per teclat i determini si s’ha introduït algun valor negatiu. Cal que mostri el resultat per pantalla amb un missatge de text.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Dame un numero:");
			String num = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num2 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num3 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num4 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num5 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num6 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num7 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num8 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num9 = buffer.readLine();
			System.out.println("Dame otro numero:");
			String num10 = buffer.readLine();


			int num11 = Integer.parseInt(num);
			int num12 = Integer.parseInt(num2);
			int num13 = Integer.parseInt(num3);
			int num14 = Integer.parseInt(num4);
			int num15 = Integer.parseInt(num5);
			int num16 = Integer.parseInt(num6);
			int num17 = Integer.parseInt(num7);
			int num18 = Integer.parseInt(num8);
			int num19 = Integer.parseInt(num9);
			int num20 = Integer.parseInt(num10);


			if (num11<0){
				System.out.println(num11 + " Es negatiu");
			} else{
				System.out.println(num11 + " Es positiu");
			} if (num12<0){
				System.out.println(num12 + " Es negatiu");
			} else{
				System.out.println(num12 + " Es positiu");
			} if (num13<0){
				System.out.println(num13 + " Es negatiu");
			} else{
				System.out.println(num13 + " Es positiu");
			} if (num14<0){
				System.out.println(num14 + " Es negatiu");
			} else{
				System.out.println(num14 + " Es positiu");
			} if (num15<0){
				System.out.println(num15 + " Es negatiu");
			} else{
				System.out.println(num15 + " Es positiu");
			} if (num16<0){
				System.out.println(num16 + " Es negatiu");
			} else{
				System.out.println(num16 + " Es positiu");
			} if (num17<0){
				System.out.println(num17 + " Es negatiu");
			} else{
				System.out.println(num17 + " Es positiu");
			} if (num18<0){
				System.out.println(num18 + " Es negatiu");
			} else{
				System.out.println(num18 + " Es positiu");
			} if (num19<0){
				System.out.println(num19 + " Es negatiu");
			} else{
				System.out.println(num19 + " Es positiu");
			} if (num20<0){
				System.out.println(num20 + " Es negatiu");
			} else{
				System.out.println(num20 + " Es positiu");
			}
		}


		catch (Exception e){

			System.out.println("Error");

		}	
	}
}