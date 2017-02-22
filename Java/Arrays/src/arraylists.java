import java.util.*;
public class arraylists {
	public static void main(String[] args) {

		try{
			//Ex01: Crear un primer ArrayList de tipus variable, amb 10 elements inicials, de diferents tipus de dades.
			ArrayList a = new ArrayList();

			for(int i=0;i<3;i++){
				a.add("Hola");
				a.add(3);
				if(i!=2){
					a.add('a');
					a.add(23.5);
				}
				if(i==2){
					System.out.println("Ex01: " + a);
				}
			}
			//Ex02: Crear un segon ArrayList amb tots els seus valors de tipus enter, amb 15 valors inicials de diferents nombres.
			ArrayList<Integer> b = new ArrayList<Integer>();

			for(int i=0;i<15;i++){
				b.add(i);
				if(i==14){
					System.out.println("Ex02: " + b);
				}
			}
			//Ex03: Crear un tercer ArrayList amb tots els seus valors de tipus String, amb 8 valors inicials de diferents paraules.
			ArrayList<String> c = new ArrayList<String>();

			c.add("Hola");
			c.add("Hector");
			c.add("que");
			c.add("tal");
			c.add("estás");
			c.add("???");
			c.add("Muy");
			c.add("Bien!!");
			System.out.println("Ex03: " + c);

			//Ex04: Mostrar per pantalla el contingut dels tres arrays.

			//Ex05: a. Treballar sobre el primer array creat: Eliminar el valor de la primera posició. Com queda ara l’array? Mostra’l per pantalla.
			ArrayList d = new ArrayList();

			for(int i=0;i<3;i++){
				d.add("Hola");
				d.add(3);
				if(i!=2){
					d.add('a');
					d.add(23.5);
				}
				if(i==2){
					d.remove(0);
					System.out.println("Ex05: a. " + d);
				}
			}
			//b. Afegir un element de tipus caràcter a la primera posició. Com queda ara l’array? Mostra’l per pantalla.
			ArrayList e = new ArrayList();
			for(int i=0;i<3;i++){
				e.add("Hola");
				e.add(3);
				if(i!=2){
					e.add('a');
					e.add(23.5);
				}
				if(i==2){
					e.remove(0);
					e.add(0,'b');
					System.out.println("Ex05: b. " + e);
					//c. Mostrar el contingut de la posició 3 de l’array.
					System.out.println("Ex05: c. " + e.get(3));
				}
			}
			//Ex06: Mostra la mida actual dels tres arrays amb un únic missatge de text per pantalla.
			System.out.println("Ex06: " + a.size() + " " + b.size() + " " + c.size());
			//Ex07: a. Treballar sobre el segon array creat: Sumar els valors de les tres primers posicions de l’array, guardar el resultat en una variable i mostrar el resultat per pantalla.
			int num;
			ArrayList<Integer> f = new ArrayList<Integer>();

			for(int i=0;i<15;i++){
				f.add(i);
				if(i==14){
					num=f.get(0)+f.get(1)+f.get(2);
					System.out.println("Ex07: a. " + num);				
				}
			}
			//Ex08: Comprovar si el valor “hola” es troba en el tercer array o no.
			ArrayList<String> g = new ArrayList<String>();

			g.add("Hola");
			g.add("Hector");
			g.add("que");
			g.add("tal");
			g.add("estás");
			g.add("???");
			g.add("Muy");
			g.add("Bien!!");
			System.out.println("Ex08: " + g.contains("Hola"));

			//Ex09: Comprovar si el valor 5 es troba en el segon array, i si es troba, indicar en quina posició està.
			ArrayList<Integer> h = new ArrayList<Integer>();

			for(int i=0;i<15;i++){
				h.add(i);
				if (h.contains(5)==true){
					if(i==5){
						System.out.println("Ex09: " + i);
					}
				}
			}

			//Ex10: Eliminar el primer array creat.
			a.clear();
			System.out.println("Ex10: " + a);

			//Ex07: b. Afegir un nou valor a la posició 50 de l’array. Surt algun error? On s’afegeix l’element? Mostra l’array per pantalla.
			f.add(50, 5);
			System.out.println(f);
		}
		catch (Exception e){

			System.out.println("Ex07: b. Error " + e + " //SALTA ERROR PERQUE INTENTA AFEGIR UN VALOR EN LA POSICIO 50, PERO LA LONGITUD DE L'ARRAY ES DE 15!");
		}
	}
}