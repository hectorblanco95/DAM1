public class Password {

	// Atributos de la clase persona con sus valores por defecto
	private int longitud = 8; 
	private String contra = ""; 

	// Constructor vacio de la clase
	public Password(){
	}

	// Un constructor con la longitud que nosotros le pasemos. Generar� una contrase�a aleatoria con esa longitud.
	public Password(int longitud){
		this.longitud=longitud;
		this.contra = generarContra();
	}

	// Getters

	public String getContra(){
		return this.contra;
	}
	public int getlongitud(){
		return this.longitud;
	}

	// Setters

	public void setlongitud(int longitud){
		this.longitud = longitud;
	}

	// Otros metodos de la clase

	public String generarContra() {
		String letras = "ABCDEFGHIJKLMN�OPQRSTUVWXYZ�abcdefghijklmn�opqrstuvwxyz�@~!#$-_*+&?�=.1234567890";
		for (int i = 0; i <= this.longitud - 1; i++) {
			contra = contra + letras.charAt((int) (Math.random() * letras.length()));
		}
		System.out.println(contra);
		return contra;
	}
	public String esFuerte() {
		String letras = "ABCDEFGHIJKLMN�OPQRSTUVWXYZ�";
		String letras2 = "abcdefghijklmn�opqrstuvwxyz�";
		String letras3 = "@~!#$-_*+&?�=.1234567890";
		
		m�s de 2 may�sculas, m�s de 1 min�scula y m�s de 5 n�meros
		
		contMayusculas
		contMinusculas
		contNumeros
		
		si(contra[i].isUpperCase())
			contMayusculas++;
		else if(contra[i].isLoweCase){
			
		for (int i = 0; i <= this.longitud - 1; i++) {
			contra = contra + letras.charAt((int) (Math.random() * letras.length()));
		}
		System.out.println(contra);
		
		return(contMayusculas>2 && contMinus >1 && contNum >5);
		return contra;
	}
}