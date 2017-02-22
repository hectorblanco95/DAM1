import java.io.*;
import java.util.*;
public class carreraDeHormigas {
	//Practica carrera de hormigas
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int v=0;
			int h=0;
			int j=0;
			int min2=Integer.MIN_VALUE;
			int max2=Integer.MIN_VALUE;
			ArrayList<Integer> posicion = new ArrayList<Integer>();
			ArrayList<Integer> min = new ArrayList<Integer>();
			ArrayList<Integer> max = new ArrayList<Integer>();

			System.out.println("Introduce la longitud de la pista: ");
			v = Integer.parseInt(buffer.readLine());
			for (int i=0;i<v;i++){
				posicion.add(i, 0);
			}
			System.out.println("Introduce cuantas hormigas van a correr: ");
			h = Integer.parseInt(buffer.readLine());
			for (int i=0;i<h;i++){
				System.out.println("Introduce las posiciones de las hormigas: ");
				posicion.set(j=Integer.parseInt(buffer.readLine()), 1);
				if((j+1) < (v-j)){
					min.add(i, j+1);
					max.add(i, v-j);
				}else{
					min.add(i, v-j);
					max.add(i,j+1);		
				}		
				if (min.get(i)>min2){
					min2=min.get(i);
				} if (max.get(i)>max2){
					max2=max.get(i);
				}	
			}
			System.out.println(posicion);
			System.out.println(min);
			System.out.println(max);
			System.out.println(min2);
			System.out.println(max2);
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}