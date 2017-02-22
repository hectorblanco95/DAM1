import java.io.*;
public class ComprandoSandías {
	//Escriure un programa en llenguatge Java on es demani un mes i un any per teclat i es mostri el nombre de dies que té aquest mes (cal tenir especial compte amb el mes de febrer i els anys de traspàs).
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Cuantas sandías tiene el primer agricultor?");
			String a = buffer.readLine();
			System.out.println("Cuanto cuesta cada sandía?");
			String b = buffer.readLine();
			System.out.println("Cuantas sandías tiene el segon agricultor?");
			String c = buffer.readLine();
			System.out.println("Cuanto cuesta cada sandía?");
			String d = buffer.readLine();
			System.out.println("Cuantas monedas tienes?");
			String e = buffer.readLine();

			int sandias = Integer.parseInt(a);
			int precioSandia = Integer.parseInt(b);
			int sandias2 = Integer.parseInt(c);		
			int precioSandia2 = Integer.parseInt(d);
			int monedas = Integer.parseInt(e);
			int precioTotal= sandias*precioSandia;
			int precioTotal2= sandias2*precioSandia2;
			int sandiasParaComprar=monedas/precioSandia;	
			int sandiasParaComprar3=monedas/precioSandia2;
			int dineroRestante=0;
			int sandiasParaComprar2=0;
			int sandiasCompradas=0;
			int dineroRestante2=monedas-sandiasParaComprar3;


			if (precioSandia2>=precioSandia && monedas>sandiasParaComprar && monedas>=precioTotal){
				System.out.println("Del primer agricultor compro " + sandias + " sandías");
				dineroRestante=monedas-precioTotal;
				System.out.println("Dispongo de " + dineroRestante + " monedas");
				sandiasParaComprar2=dineroRestante/precioSandia2;
				if(sandiasParaComprar2 > sandias2){
					System.out.println("Del segon agricultor compro " + sandias2  + " sandías");
				} else if(sandias2> sandiasParaComprar2){
					sandiasCompradas=dineroRestante/precioSandia2;
					System.out.println("Del segon agricultor compro " + sandiasCompradas  + " sandías");
				} else if(sandias2==sandiasParaComprar2){
					sandiasCompradas=dineroRestante/precioSandia2;
					System.out.println("Del segon agricultor compro " + sandias2  + " sandías");
				}
			} else if (precioSandia2>=precioSandia && monedas>sandiasParaComprar && monedas<precioTotal){
				System.out.println("Del primer agricultor compro " + sandiasParaComprar + " sandías");
				dineroRestante=monedas-precioTotal;
				System.out.println("Dispongo de " + dineroRestante + " monedas; no tengo suficiente dinero para seguir comprando");

			} else if (precioSandia2==precioSandia && monedas>sandiasParaComprar && monedas<precioTotal){
				System.out.println("Compro " + sandiasParaComprar + " sandías");
			}
			else if (precioSandia>=precioSandia2 && monedas>sandiasParaComprar3 && monedas>=precioTotal2){	
				dineroRestante2=monedas-precioTotal2;
				System.out.println("Del segon agricultor compro " + sandias2  + " sandías");
				System.out.println("Dispongo de " + dineroRestante2 + " monedas");
				sandiasParaComprar2=dineroRestante2/precioSandia;
				if(sandiasParaComprar > sandias){
					System.out.println("Del primer agricultor compro " + sandias + " sandías");
				} else if(sandias> sandiasParaComprar){
					sandiasCompradas=dineroRestante2/precioSandia;
					System.out.println("Del primer agricultor compro " + sandiasCompradas  + " sandías");
				} else if(sandias==sandiasParaComprar){
					sandiasCompradas=dineroRestante/precioSandia2;
					System.out.println("Del segon agricultor compro " + sandias  + " sandías");
				}
			} else if (precioSandia>=precioSandia2 && monedas>sandiasParaComprar3 && monedas<precioTotal2){
				System.out.println("Del primer agricultor compro " + sandiasParaComprar3 + " sandías");
				dineroRestante=monedas-precioTotal;
				System.out.println("Dispongo de " + dineroRestante + " monedas; no tengo suficiente dinero para seguir comprando");
			} else if (precioSandia==precioSandia2 && monedas>sandiasParaComprar3 && monedas<precioTotal2){
				System.out.println("Compro " + sandiasParaComprar3 + " sandías");
			}
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}
