import java.io.*;
public class TortugasNinja {
	//Practica TortugasNinja
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int numMalos=0;
			int numInocentes=0;
			double nivelRealizacionLeonardo=0;
			double nivelRealizacionLeonardo2=0;
			double nivelRealizacionMichelangelo=0;
			double nivelRealizacionMichelangelo2=0;
			double nivelRealizacionDonatello=0;
			double nivelRealizacionDonatello2=0;
			double nivelRealizacionRaphael=0;
			double nivelRealizacionRaphael2=0;
			String leonardo="";
			String michelangelo="";
			String donatello="";
			String raphael="";
			String leonardo2="";
			String michelangelo2="";
			String donatello2="";
			String raphael2="";
			int cont=0;
			int cont2=0;
			int cont3=0;
			int cont4=0;
			int gradoIncidencia=0;
			int v=-1;

			while(v !=8){
				System.out.println(" **************** MENU PRINCIPAL **************** ");
				System.out.println(" ------------------------------------------------ ");
				System.out.println(" Elige opcion:");
				System.out.println("   [1] - REGISTRAR MALOS");
				System.out.println("   [2] - REGISTRAR INOCENTES");
				System.out.println("   [3] - REGISTRAR REALIZACI�N");
				System.out.println("   [4] - MOSTRAR GRADO DE INCIDENCIA DE LA CIUDAD");
				System.out.println("   [5] - VER EQUILIBRIO");
				System.out.println("   [6] - MEJORAR REALIZACI�N");
				System.out.println("   [7] - RANKING DE REALIZACI�N");
				System.out.println("   [8] - SALIR");
				v = Integer.parseInt(buffer.readLine());

				switch(v){

				case 1:
					System.out.println("Introduce cuantos malos han desarmado a lo largo del d�a:");
					String a = buffer.readLine();
					numMalos = Integer.parseInt(a);
					while (numMalos<0){
						System.out.println("El n�mero de malos que han desarmado, �s err�neo!");
						System.out.println("Introduce cuantos malos han desarmado a lo largo del d�a:");
						numMalos = Integer.parseInt(buffer.readLine());							
					}		
					break;

				case 2:
					System.out.println("Introduce cuantos inocentes salvados a lo largo del d�a:");
					String b = buffer.readLine();
					numInocentes = Integer.parseInt(b);
					while (numInocentes<0){
						System.out.println("El n�mero de inocentes salvados, �s err�neo!");
						System.out.println("Introduce cuantos inocentes salvados a lo largo del d�a:");
						numInocentes = Integer.parseInt(buffer.readLine());							
					}
					break;

				case 3:
					System.out.println("Introduce el nombre de la tortuga:");
					String c = buffer.readLine();
					c = c.toLowerCase();
					while (!c.equals("leonardo") && !c.equals("michelangelo") && !c.equals("donatello") && !c.equals("raphael")){
						System.out.println("El nombre de la tortuga, �s err�neo!");
						System.out.println("Introduce el nombre de la tortuga:");
						c = buffer.readLine();
					}
					if (c.equals("leonardo") && cont==0){
						cont++;
						System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
						String d = buffer.readLine();
						nivelRealizacionLeonardo = Integer.parseInt(d);
						while (nivelRealizacionLeonardo<0 || nivelRealizacionLeonardo>10){
							System.out.println("El nivel de realizaci�n, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
							d = buffer.readLine();
							nivelRealizacionLeonardo = Integer.parseInt(d);
						}
						leonardo=c;
					} else if (c.equals("leonardo") && cont>0){
						System.out.println("Leonardo ya se ha registrado!");

					} else if (c.equals("michelangelo") && cont2==0){
						cont2++;
						System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
						String e = buffer.readLine();
						nivelRealizacionMichelangelo = Integer.parseInt(e);	
						while (nivelRealizacionMichelangelo<0 || nivelRealizacionMichelangelo>10){
							System.out.println("El nivel de realizaci�n, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
							e = buffer.readLine();
							nivelRealizacionMichelangelo = Integer.parseInt(e);
						}
						michelangelo=c;
					} else if (c.equals("michelangelo") && cont2>0){
						System.out.println("Michelangelo ya se ha registrado!");

					} else if (c.equals("donatello") && cont3==0){
						cont3++;
						System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
						String f = buffer.readLine();
						nivelRealizacionDonatello = Integer.parseInt(f);
						while (nivelRealizacionDonatello<0 || nivelRealizacionDonatello>10){
							System.out.println("El nivel de realizaci�n, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
							f = buffer.readLine();
							nivelRealizacionDonatello = Integer.parseInt(f);
						}
						donatello=c;
					} else if (c.equals("donatello") && cont3>0){
						System.out.println("Donatello ya se ha registrado!");

					} else if (c.equals("raphael") && cont4==0){
						cont4++;
						System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
						String g = buffer.readLine();
						nivelRealizacionRaphael = Integer.parseInt(g);
						while (nivelRealizacionRaphael<0 || nivelRealizacionRaphael>10){
							System.out.println("El nivel de realizaci�n, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n de la tortuga:");
							g = buffer.readLine();
							nivelRealizacionRaphael = Integer.parseInt(g);
						}
						raphael=c;
					} else if (c.equals("raphael") && cont4>0){
						System.out.println("Raphael ya se ha registrado!");

					}	
					break;

				case 4:
					gradoIncidencia = (int) Math.sqrt(numMalos);
					System.out.println("Grado de incidencia de la ciudad = " + gradoIncidencia);								
					break;

				case 5:
					if (numMalos==numInocentes){
						System.out.println("�s proporcional: el n�mero de inocentes salvados " + numInocentes + " y el n�mero de malos desarmados " + numMalos);
					} else if (numMalos<numInocentes){
						System.out.println("�s positivo: el n�mero de inocentes salvados " + numInocentes + " y el n�mero de malos desarmados " + numMalos);
					} else{
						System.out.println("�s negativo: el n�mero de inocentes salvados " + numInocentes + " y el n�mero de malos desarmados " + numMalos);
					}
					break;

				case 6:
					System.out.println("Nombre de la tortuga ha mejorar su realizacion");
					String h = buffer.readLine();
					h = h.toLowerCase();
					while (!h.equals("leonardo") && !h.equals("michelangelo") && !h.equals("donatello") && !h.equals("raphael")){
						System.out.println("El nombre de la tortuga, �s err�neo!");
						System.out.println("Introduce el nombre de la tortuga:");
						h = buffer.readLine();
					}
					if (h.equals("leonardo") && cont==1 || cont==0){
						cont+=2;
						System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
						String i = buffer.readLine();
						nivelRealizacionLeonardo2 = Integer.parseInt(i);
						nivelRealizacionLeonardo2=nivelRealizacionLeonardo2+nivelRealizacionLeonardo;
						while (nivelRealizacionLeonardo2<0 || nivelRealizacionLeonardo2>10){
							System.out.println("El nivel de realizacion mejorado, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
							i = buffer.readLine();
							nivelRealizacionLeonardo2 = Integer.parseInt(i);
							nivelRealizacionLeonardo2=nivelRealizacionLeonardo2+nivelRealizacionLeonardo;
						}
						leonardo2=h;
					} else if (h.equals("leonardo") && cont>1){
						System.out.println("Leonardo ya se ha registrado!");

					} else if (h.equals("michelangelo") && cont2==1  || cont2==0){
						cont2+=2;
						System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
						String j = buffer.readLine();
						nivelRealizacionMichelangelo2 = Integer.parseInt(j);
						nivelRealizacionMichelangelo2=nivelRealizacionMichelangelo2+nivelRealizacionMichelangelo;
						while (nivelRealizacionMichelangelo2<0 || nivelRealizacionMichelangelo2>10){
							System.out.println("El nivel de realizacion mejorado, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
							j = buffer.readLine();
							nivelRealizacionMichelangelo2 = Integer.parseInt(j);
							nivelRealizacionMichelangelo2=nivelRealizacionMichelangelo2+nivelRealizacionMichelangelo;
						}
						nivelRealizacionMichelangelo2=nivelRealizacionMichelangelo2+nivelRealizacionMichelangelo;
						michelangelo2=h;
					} else if (h.equals("michelangelo") && cont2>1){
						System.out.println("Michelangelo ya se ha registrado!");

					} else if (h.equals("donatello") && cont3==1 || cont3==0){
						cont3+=2;
						System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
						String k = buffer.readLine();
						nivelRealizacionDonatello2 = Integer.parseInt(k);
						nivelRealizacionDonatello2=nivelRealizacionDonatello2+nivelRealizacionDonatello;
						while (nivelRealizacionDonatello2<0 || nivelRealizacionDonatello2>10){
							System.out.println("El nivel de realizacion mejorado, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
							k = buffer.readLine();
							nivelRealizacionDonatello2 = Integer.parseInt(k);
							nivelRealizacionDonatello2=nivelRealizacionDonatello2+nivelRealizacionDonatello;
						}
						donatello2=h;
					} else if (h.equals("donatello") && cont3>1){
						System.out.println("Donatello ya se ha registrado!");

					} else if (h.equals("raphael") && cont4==1 || cont4==0){
						cont4+=2;
						System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
						String l = buffer.readLine();
						nivelRealizacionRaphael2 = Integer.parseInt(l);
						nivelRealizacionRaphael2=nivelRealizacionRaphael2+nivelRealizacionRaphael;
						while (nivelRealizacionRaphael2<0 || nivelRealizacionRaphael2>10){
							System.out.println("El nivel de realizacion mejorado, es erroneo!");
							System.out.println("Introduce el nivel de realizaci�n ha mejorar:");
							l = buffer.readLine();
							nivelRealizacionRaphael2 = Integer.parseInt(l);
							nivelRealizacionRaphael2=nivelRealizacionRaphael2+nivelRealizacionRaphael;
						}				
						raphael2=h;
					} else if (h.equals("raphael") && cont4>1){
						System.out.println("Raphael ya se ha registrado!");

					}
					break;

				case 7:
					if (nivelRealizacionLeonardo>=0 || nivelRealizacionMichelangelo>=0 || nivelRealizacionDonatello>=0 || nivelRealizacionRaphael>=0){
						System.out.println("RANKING:");
						if (nivelRealizacionLeonardo>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionRaphael){
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
						} else if (nivelRealizacionLeonardo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionRaphael){
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
						} else if (nivelRealizacionLeonardo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionDonatello){
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);	
						} else if (nivelRealizacionLeonardo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionMichelangelo){
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);	
						} else if (nivelRealizacionLeonardo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionMichelangelo){
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);	
						} else if (nivelRealizacionLeonardo>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionDonatello){
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
						} else if (nivelRealizacionMichelangelo>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionRaphael){
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
						} else if (nivelRealizacionMichelangelo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionRaphael){
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
						} else if (nivelRealizacionMichelangelo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionDonatello){
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);	
						} else if (nivelRealizacionMichelangelo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionLeonardo){
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);	
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
						} else if (nivelRealizacionMichelangelo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionLeonardo){
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);	
						} else if (nivelRealizacionMichelangelo>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionDonatello){	
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
						} else if (nivelRealizacionDonatello>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionRaphael){
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
						} else if (nivelRealizacionDonatello>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionRaphael){
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
						} else if (nivelRealizacionDonatello>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionMichelangelo){
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
						} else if (nivelRealizacionDonatello>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionLeonardo){
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);	
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
						} else if (nivelRealizacionDonatello>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionLeonardo){
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);	
						} else if (nivelRealizacionDonatello>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionRaphael && nivelRealizacionRaphael>=nivelRealizacionMichelangelo){	
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
						} else if (nivelRealizacionRaphael>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionDonatello){
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
						} else if (nivelRealizacionRaphael>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionDonatello){
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
						} else if (nivelRealizacionRaphael>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionMichelangelo){
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
						} else if (nivelRealizacionRaphael>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionLeonardo){
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);	
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
						} else if (nivelRealizacionRaphael>=nivelRealizacionMichelangelo && nivelRealizacionMichelangelo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionLeonardo){
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);	
						} else if (nivelRealizacionRaphael>=nivelRealizacionLeonardo && nivelRealizacionLeonardo>=nivelRealizacionDonatello && nivelRealizacionDonatello>=nivelRealizacionMichelangelo){	
							System.out.print(raphael + ": ");
							System.out.println(nivelRealizacionRaphael);
							System.out.print(leonardo + ": ");
							System.out.println(nivelRealizacionLeonardo);
							System.out.print(donatello + ": ");
							System.out.println(nivelRealizacionDonatello);
							System.out.print(michelangelo + ": ");
							System.out.println(nivelRealizacionMichelangelo);
						}
						System.out.println();
					}
					if (nivelRealizacionLeonardo2>=0 || nivelRealizacionMichelangelo2>=0 || nivelRealizacionDonatello2>=0 || nivelRealizacionRaphael2>=0){
						System.out.println("RANKING MEJORADO:");
						if (nivelRealizacionLeonardo2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionRaphael2){
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
						} else if (nivelRealizacionLeonardo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionRaphael2){
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
						} else if (nivelRealizacionLeonardo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionDonatello2){
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);	
						} else if (nivelRealizacionLeonardo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionMichelangelo2){
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);	
						} else if (nivelRealizacionLeonardo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionMichelangelo2){
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);	
						} else if (nivelRealizacionLeonardo2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionDonatello2){
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
						} else if (nivelRealizacionMichelangelo2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionRaphael2){
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
						} else if (nivelRealizacionMichelangelo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionRaphael2){
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
						} else if (nivelRealizacionMichelangelo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionDonatello2){
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);	
						} else if (nivelRealizacionMichelangelo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionLeonardo2){
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);	
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
						} else if (nivelRealizacionMichelangelo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionLeonardo2){
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);	
						} else if (nivelRealizacionMichelangelo2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionDonatello2){	
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
						} else if (nivelRealizacionDonatello2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionRaphael2){
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
						} else if (nivelRealizacionDonatello2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionRaphael2){
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
						} else if (nivelRealizacionDonatello2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionMichelangelo2){
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
						} else if (nivelRealizacionDonatello2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionLeonardo2){
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);	
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
						} else if (nivelRealizacionDonatello2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionLeonardo2){
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);	
						} else if (nivelRealizacionDonatello2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionRaphael2 && nivelRealizacionRaphael2>=nivelRealizacionMichelangelo2){	
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
						} else if (nivelRealizacionRaphael2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionDonatello2){
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
						} else if (nivelRealizacionRaphael2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionDonatello2){
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
						} else if (nivelRealizacionRaphael2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionMichelangelo2){
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
						} else if (nivelRealizacionRaphael2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionLeonardo2){
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);	
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
						} else if (nivelRealizacionRaphael2>=nivelRealizacionMichelangelo2 && nivelRealizacionMichelangelo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionLeonardo2){
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);	
						} else if (nivelRealizacionRaphael2>=nivelRealizacionLeonardo2 && nivelRealizacionLeonardo2>=nivelRealizacionDonatello2 && nivelRealizacionDonatello2>=nivelRealizacionMichelangelo2){	
							System.out.print(raphael2 + ": ");
							System.out.println(nivelRealizacionRaphael2);
							System.out.print(leonardo2 + ": ");
							System.out.println(nivelRealizacionLeonardo2);
							System.out.print(donatello2 + ": ");
							System.out.println(nivelRealizacionDonatello2);
							System.out.print(michelangelo2 + ": ");
							System.out.println(nivelRealizacionMichelangelo2);
						}
						System.out.println();
					}			
					break;

				case 8:
					System.out.println();
					System.out.println("KAWABONGA!");
					System.out.println();
					break;

				default:
					System.out.println();
					System.out.println("Opcinon no valida, introduce una opcion correcta!");
					System.out.println();
					break;
				}
			}
		}
		catch (Exception e){
			System.out.println("Error");
		}
	}
}