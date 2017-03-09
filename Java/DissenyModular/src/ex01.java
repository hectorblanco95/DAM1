import java.util.ArrayList;

// Definición de la clase calculadora
public class ex01 {
	// Método principal de la clase Calculadora que se ejecuta al principio
	public static void main (String[] args){
		System.out.println("Suma");
		int op1 = 3, op2 = 5;
		ArrayList<Integer> divis = new ArrayList<Integer>();
		// Llamada al método suma que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la suma de los dos números
		int op3 = suma(op1, op2);
		System.out.println("La suma de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = suma(4, 5);
		System.out.println("La suma de 4 y 5 es igual a " + op3);
		System.out.println("Resta");
		// Llamada al método resta que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la resta de los dos números
		op3 = resta(op1, op2);
		System.out.println("La resta de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = resta(4, 5);
		System.out.println("La resta de 4 y 5 es igual a " + op3);
		System.out.println("Multiplicación");
		// Llamada al método multiplicacion que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la multiplicacion de los dos números
		op3 = multi(op1, op2);
		System.out.println("La multiplicación de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = multi(4, 5);
		System.out.println("La multiplicación de 4 y 5 es igual a " + op3);
		System.out.println("División");
		// Llamada al método multiplicacion que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la multiplicacion de los dos números
		op3 = divi(op1, op2);
		System.out.println("La división de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = divi(4, 5);
		System.out.println("La división de 4 y 5 es igual a " + op3);
		System.out.println("Módulo");
		// Llamada al método modulo que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la modulo de los dos números
		op3 = modul(op1, op2);
		System.out.println("La módulo de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = modul(4, 5);
		System.out.println("La módulo de 4 y 5 es igual a " + op3);
		System.out.println("Divisores");
		// Llamada al método devisores que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la divisores de los dos números
		divis = divisors(op1,divis);
		System.out.println("Los divisores de " + op1 + " es igual a " + divis);
		divis.clear();
		divis = divisors(5, divis);
		System.out.println("los divisores de 5 es igual a " + divis);
		System.out.println("Factorial");
		// Llamada al método factorial que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la factorial de los dos números
		op3 = factori(op1);
		System.out.println("El factorial de " + op1 + " es igual a " + op3);
		op3 = factori(5);
		System.out.println("El factorial de 5 es igual a " + op3);
	}
	// Definición del método suma, con dos parámetros que son los valores a sumar
	// int es el tipo de dato que devuelve, en este caso la suma de los dos valores pasados como
	// parámetro
	static int suma (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 + operador2;
		// Valor que se devuelve a quien ha hecho la llamada del método
		return operador3;
	} 
	// Definición del método resta.
	static int resta (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 - operador2;
		// Valor que se devuelve a quien ha hecho la llamada del método
		return operador3;
	}
	// Definición del método multiplicacion.
	static int multi (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 * operador2;
		// Valor que se devuelve a quien ha hecho la llamada del método
		return operador3;
	}
	// Definición del método division.
	static int divi (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 / operador2;
		// Valor que se devuelve a quien ha hecho la llamada del método
		return operador3;
	}
	// Definición del método modulo.
	static int modul (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 % operador2;
		// Valor que se devuelve a quien ha hecho la llamada del método
		return operador3;
	}
	// Definición del método divisores.
	static ArrayList<Integer> divisors (int operador1, ArrayList<Integer> divis) {

		for (int i = 1 ; i <= operador1 ; i++){
			if (operador1 % i == 0)
				divis.add(i);
		}
		// Valor que se devuelve a quien ha hecho la llamada del método
		return divis;
	}
	// Definición del método factorial.
	static int factori (int operador1) {
		int operador3=1;

		for (int i=1; i<=operador1; i++){
			operador3*=i;		
		}
		// Valor que se devuelve a quien ha hecho la llamada del método
		return operador3;
	}
}