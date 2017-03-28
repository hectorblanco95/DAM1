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

	private String generarContra() {
		String letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÇabcdefghijklmnñOpqrstuvwxyzç@~!#$-_*+&?/¿¡=.1234567890";
		for (int i = 0; i <= this.longitud - 1; i++) {
			contra = contra + letras.charAt((int) (Math.random() * letras.length()));
		}
		return contra;
	}
	
	public boolean esFuerte() {
		int contLetras=0;
		int contLetras2=0;
		int contNumeros=0;

		for (int i = 0; i <= this.longitud - 1; i++) {
			if(Character.isUpperCase(this.contra.charAt(i))) contLetras++;
			else if(Character.isLowerCase(this.contra.charAt(i))) contLetras2++;
			else contNumeros++;
		}
		return(contLetras>2 && contLetras2>1 && contNumeros>5);
	}
}