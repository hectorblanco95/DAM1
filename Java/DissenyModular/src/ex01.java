import java.util.ArrayList;

// Definici�n de la clase calculadora
public class ex01 {
	// M�todo principal de la clase Calculadora que se ejecuta al principio
	public static void main (String[] args){
		System.out.println("Suma");
		int op1 = 3, op2 = 5;
		ArrayList<Integer> divis = new ArrayList<Integer>();
		// Llamada al m�todo suma que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la suma de los dos n�meros
		int op3 = suma(op1, op2);
		System.out.println("La suma de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = suma(4, 5);
		System.out.println("La suma de 4 y 5 es igual a " + op3);
		System.out.println("Resta");
		// Llamada al m�todo resta que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la resta de los dos n�meros
		op3 = resta(op1, op2);
		System.out.println("La resta de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = resta(4, 5);
		System.out.println("La resta de 4 y 5 es igual a " + op3);
		System.out.println("Multiplicaci�n");
		// Llamada al m�todo multiplicacion que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la multiplicacion de los dos n�meros
		op3 = multi(op1, op2);
		System.out.println("La multiplicaci�n de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = multi(4, 5);
		System.out.println("La multiplicaci�n de 4 y 5 es igual a " + op3);
		System.out.println("Divisi�n");
		// Llamada al m�todo multiplicacion que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la multiplicacion de los dos n�meros
		op3 = divi(op1, op2);
		System.out.println("La divisi�n de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = divi(4, 5);
		System.out.println("La divisi�n de 4 y 5 es igual a " + op3);
		System.out.println("M�dulo");
		// Llamada al m�todo modulo que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la modulo de los dos n�meros
		op3 = modul(op1, op2);
		System.out.println("La m�dulo de " + op1 + " y " + op2 + " es igual a " + op3);
		op3 = modul(4, 5);
		System.out.println("La m�dulo de 4 y 5 es igual a " + op3);
		System.out.println("Divisores");
		// Llamada al m�todo devisores que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la divisores de los dos n�meros
		divis = divisors(op1,divis);
		System.out.println("Los divisores de " + op1 + " es igual a " + divis);
		divis.clear();
		divis = divisors(5, divis);
		System.out.println("los divisores de 5 es igual a " + divis);
		System.out.println("Factorial");
		// Llamada al m�todo factorial que hemos definido dentro de la clase Calculadora
		// Devuelve un tipo entero que es la factorial de los dos n�meros
		op3 = factori(op1);
		System.out.println("El factorial de " + op1 + " es igual a " + op3);
		op3 = factori(5);
		System.out.println("El factorial de 5 es igual a " + op3);
	}
	// Definici�n del m�todo suma, con dos par�metros que son los valores a sumar
	// int es el tipo de dato que devuelve, en este caso la suma de los dos valores pasados como
	// par�metro
	static int suma (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 + operador2;
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return operador3;
	} 
	// Definici�n del m�todo resta.
	static int resta (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 - operador2;
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return operador3;
	}
	// Definici�n del m�todo multiplicacion.
	static int multi (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 * operador2;
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return operador3;
	}
	// Definici�n del m�todo division.
	static int divi (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 / operador2;
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return operador3;
	}
	// Definici�n del m�todo modulo.
	static int modul (int operador1, int operador2) {
		int operador3;
		operador3 = operador1 % operador2;
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return operador3;
	}
	// Definici�n del m�todo divisores.
	static ArrayList<Integer> divisors (int operador1, ArrayList<Integer> divis) {

		for (int i = 1 ; i <= operador1 ; i++){
			if (operador1 % i == 0)
				divis.add(i);
		}
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return divis;
	}
	// Definici�n del m�todo factorial.
	static int factori (int operador1) {
		int operador3=1;

		for (int i=1; i<=operador1; i++){
			operador3*=i;		
		}
		// Valor que se devuelve a quien ha hecho la llamada del m�todo
		return operador3;
	}
}