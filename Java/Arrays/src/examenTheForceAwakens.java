import java.io.*;
import java.util.*;
public class examenTheForceAwakens {
	//examenTheForceAwakens
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			byte v=0;
			byte rnd;

			ArrayList<Byte> defensaRESISTENCIA = new ArrayList<Byte>();
			ArrayList<Byte> energiaRESISTENCIA = new ArrayList<Byte>();
			ArrayList<Byte> defensaIMPERIO = new ArrayList<Byte>();
			ArrayList<Byte> energiaIMPERIO = new ArrayList<Byte>();

			while(v !=4){
				System.out.println(" ********* The Force Awakens ********* ");
				System.out.println(" ------------------------------------- ");
				System.out.println(" Elige opcion:");
				System.out.println("       [1] - ASIGNAR VALORES");
				System.out.println("       [2] - INICIAR BATALLA");
				System.out.println("       [3] - ANALISIS DE LA BATALLA");
				System.out.println("       [4] - SALIR");
				v = Byte.parseByte(buffer.readLine());

				switch(v){

				case 1:
					defensaRESISTENCIA.clear();energiaRESISTENCIA.clear();defensaIMPERIO.clear();energiaIMPERIO.clear();
					System.out.println("Valores que se deben registrar: ");
					for (byte i=0; i<10; i++){
						defensaRESISTENCIA.add(i, (byte)(Math.random()*5));
						energiaRESISTENCIA.add(i, (byte)(Math.random()*11));
						defensaIMPERIO.add(i, (byte)(Math.random()*5));
						energiaIMPERIO.add(i, (byte)(Math.random()*11));
					}
					System.out.println("Nivel de defensa de LA RESISTENCIA: " + defensaRESISTENCIA);
					System.out.println("Nivel de energía actual de LA RESISTENCIA: " + energiaRESISTENCIA);
					System.out.println("Nivel de defensa del IMPERIO: " + defensaIMPERIO);
					System.out.println("Nivel de energía actual del IMPERIO: " + energiaIMPERIO);

					break;

				case 2:
					rnd=(byte)(Math.random()*2);
					if (rnd==0){
						System.out.println("Empieza a atacar EL IMPERIO!");
						for(byte i=0;i<10;i++){
							if (i%2==0){
								if (defensaRESISTENCIA.get(i)>=energiaIMPERIO.get(i)){
								} else{
									energiaRESISTENCIA.set(i, (byte) (energiaRESISTENCIA.get(i)+(defensaRESISTENCIA.get(i)-energiaIMPERIO.get(i))));
									if(energiaRESISTENCIA.get(i)<0){
										energiaRESISTENCIA.set(i, (byte) 0);
									}
								}
							} else{
								if (defensaIMPERIO.get(i)>=energiaRESISTENCIA.get(i)){
								} else{
									energiaIMPERIO.set(i, (byte) (energiaIMPERIO.get(i)+(defensaIMPERIO.get(i)-energiaRESISTENCIA.get(i))));
									if(energiaIMPERIO.get(i)<0){
										energiaIMPERIO.set(i, (byte) 0);
									}
								}
							}
						}
						System.out.println("Nivel de defensa de LA RESISTENCIA: " + defensaRESISTENCIA);
						System.out.println("Nivel de energía actual de LA RESISTENCIA: " + energiaRESISTENCIA);
						System.out.println("Nivel de defensa del IMPERIO: " + defensaIMPERIO);
						System.out.println("Nivel de energía actual del IMPERIO: " + energiaIMPERIO);
					} else{
						System.out.println("Empieza a atacar LA RESISTENCIA!");
						for(byte i=0;i<10;i++){
							if (i%2==0){
								if (defensaIMPERIO.get(i)>=energiaRESISTENCIA.get(i)){
								} else{
									energiaIMPERIO.set(i, (byte) (energiaIMPERIO.get(i)+(defensaIMPERIO.get(i)-energiaRESISTENCIA.get(i))));
									if(energiaIMPERIO.get(i)<0){
										energiaIMPERIO.set(i, (byte) 0);
									}
								}
							} else{
								if (defensaRESISTENCIA.get(i)>=energiaIMPERIO.get(i)){
								} else{
									energiaRESISTENCIA.set(i, (byte) (energiaRESISTENCIA.get(i)+(defensaRESISTENCIA.get(i)-energiaIMPERIO.get(i))));
									if(energiaRESISTENCIA.get(i)<0){
										energiaRESISTENCIA.set(i, (byte) 0);
									}
								}
							}
						}
						System.out.println("Nivel de defensa de LA RESISTENCIA: " + defensaRESISTENCIA);
						System.out.println("Nivel de energía actual de LA RESISTENCIA: " + energiaRESISTENCIA);
						System.out.println("Nivel de defensa del IMPERIO: " + defensaIMPERIO);
						System.out.println("Nivel de energía actual del IMPERIO: " + energiaIMPERIO);
					}
					break;

				case 3:
					byte sumaEnergiaImperio=0;
					byte sumaEnergiaResistencia=0;
					byte sumaDefensaImperio=0;
					byte sumaDefensaResistencia=0;
					byte cont=0;
					byte cont2=0;
					byte cont3=0;
					byte cont4=0;
					byte puntosImperio=0;
					byte puntosResistencia=0;
					for (byte i=0;i<10;i++){
						sumaEnergiaImperio+=energiaIMPERIO.get(i);
						sumaEnergiaResistencia+=energiaRESISTENCIA.get(i);
						if (energiaIMPERIO.get(i)>0){
							cont++;
						} if (energiaRESISTENCIA.get(i)>0){
							cont2++;
						}
						sumaDefensaImperio+=defensaIMPERIO.get(i);
						sumaDefensaResistencia+=defensaRESISTENCIA.get(i);
						if (energiaIMPERIO.get(i)>=7){
							cont3++;
						} if (energiaRESISTENCIA.get(i)>=7){
							cont4++;
						}
					}
					System.out.println("MÁXIMA ENERGÍA: ");
					System.out.println("Máxima energía IMPERIO: " + energiaIMPERIO + " = " + sumaEnergiaImperio);
					System.out.println("Máxima energía RESISTENCIA: " + energiaRESISTENCIA + " = " + sumaEnergiaResistencia);
					System.out.println("MÁS SUPERVIVIENTES: ");
					if (cont>cont2){
						System.out.println("EL IMPERIO ha sido quien ha tenido más supervivientes: " + energiaIMPERIO + " = " +  cont);
					} else if (cont2>cont){
						System.out.println("LA RESISTENCIA ha sido quien ha tenido más supervivientes: " + energiaRESISTENCIA + " = " + cont2);
					} else{
						System.out.println("EL IMPERIO y LA RESISTENCIA tienen los mismos supervivientes: " + cont);
					}
					System.out.println("MÁS DEFENSA: ");
					if (sumaDefensaImperio>sumaDefensaResistencia){
						System.out.println("Máxima defensa IMPERIO: " + defensaIMPERIO + " = " + sumaDefensaImperio);
					} else if (sumaDefensaResistencia>sumaDefensaImperio){
						System.out.println("Máxima defensa RESISTENCIA: " + defensaRESISTENCIA + " = " + sumaDefensaResistencia);
					} else {
						System.out.println("La máxima defensa IMPERIO y la máxima defensa RESISTENCIA són iguales: " + sumaDefensaImperio);
					}
					System.out.println("SOLDADOS A TOPE: ");
					System.out.println("Soldados a tope energía IMPERIO: " + energiaIMPERIO + " = " + cont3);
					System.out.println("Soldados a tope energía RESISTENCIA: " + energiaRESISTENCIA + " = " + cont4);
					if (sumaEnergiaImperio>sumaEnergiaResistencia){
						puntosImperio++;
					} else if (sumaEnergiaResistencia>sumaEnergiaImperio){
						puntosResistencia++;
					} else{
					}
					if (cont>cont2){
						puntosImperio++;
					} else if (cont2>cont){
						puntosResistencia++;
					} else{
					}
					if (sumaDefensaImperio>sumaDefensaResistencia){
						puntosImperio++;
					} else if (sumaDefensaResistencia>sumaDefensaImperio){
						puntosResistencia++;
					} else{
					}
					if (cont3>cont4){
						puntosImperio++;
					} else if (cont4>cont3){
						puntosResistencia++;
					}else {
					}
					System.out.println("VALORACIÓN GENERAL: ");
					System.out.println("Puntos IMPERIO: " + puntosImperio);
					System.out.println("Puntos RESISTENCIA: " + puntosResistencia);
					if (puntosImperio>puntosResistencia){
						System.out.println("El IMPERIO gana!");
					} else if (puntosResistencia>puntosImperio){
						System.out.println("La RESISTENCIA gana!");
					} else{
						System.out.println("Han Empatado!");
					}
					break;

				case 4:
					System.out.println("Que la fuerza te acompañe! Hazlo o no lo hagas... pero no lo intentes");
					break;

				default:
					System.out.println("Opción no válida, introduce una opción correcta!");
					System.out.println();
					break;
				}
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}