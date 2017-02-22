import java.io.*;
public class ex08{
	//Escriure un programa en llenguatge Java on es demanin deu valors enters per teclat, positius, negatius i zeros i determini el valor mig dels nombres positius, el valor mig dels nombres positius i la quantitat de zeros. Cal que mostri els tres resultats per separat, i per pantalla amb un missatge de text.
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

			int pos=0;
			int neg=0;
			int zero=0;
			int sumaPos = 0;
			int sumaNeg = 0;

			if(num11>0){
				pos++;
				sumaPos = sumaPos + num11;
			} else if(num11<0){
				neg++;
				sumaNeg= sumaNeg+num11;
			} else if(num11==0){
				zero++;
			} if(num12>pos){
				pos++;
				sumaPos = sumaPos + num12;
			} else if(num12<neg){
				neg++;
				sumaNeg= sumaNeg+num12;
			} else if(num12==0){
				zero++;
			} if(num13>pos){
				pos++;
				sumaPos = sumaPos + num13;
			} else if(num13<neg){
				neg++;
				sumaNeg= sumaNeg+num13;
			} else if(num13==0){
				zero++;
			} if(num14>pos){
				pos++;
				sumaPos = sumaPos + num14;
			} else if(num14<neg){
				neg++;
				sumaNeg= sumaNeg+num14;
			} else if(num14==0){
				zero++;
			} if(num15>pos){
				pos++;
				sumaPos = sumaPos + num15;
			} else if(num15<neg){
				neg++;
				sumaNeg= sumaNeg+num15;
			} else if(num15==0){
				zero++;
			} if(num16>0){
				pos++;
				sumaPos = sumaPos + num16;
			} else if(num16<0){
				neg++;
				sumaNeg= sumaNeg+num16;
			} else if(num16==0){
				zero++;
			} if(num17>0){
				pos++;
				sumaPos = sumaPos + num17;
			} else if(num17<0){
				neg++;
				sumaNeg= sumaNeg+num17;
			} else if(num17==0){
				zero++;
			} if(num18>0){
				pos++;
				sumaPos = sumaPos + num18;
			} else if(num18<0){
				neg++;
				sumaNeg= sumaNeg+num18;
			} else if(num18==0){
				zero++;
			} if(num19>0){
				pos++;
				sumaPos = sumaPos + num19;
			} else if(num19<0){
				neg++;
				sumaNeg= sumaNeg+num19;
			} else if(num19==0){
				zero++;
			} if(num20>0){
				pos++;
				sumaPos = sumaPos + num20;
			} else if(num20<0){
				neg++;
				sumaNeg= sumaNeg+num20;
			} else if(num20==0){
				zero++;
			}


			int mediaPos = sumaPos/pos;
			System.out.println(mediaPos + " Media positivos");
			int mediaNeg = sumaNeg/neg;
			System.out.println(mediaNeg + " Media negativos");
			System.out.println(zero + " Media zeros");

		}


		catch (Exception e){

			System.out.println("Error");

		}	
	}
}