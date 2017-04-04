public class Restaurant {

	// Atributos de la clase persona con sus valores por defecto
	private String nomPlato;
	private double caloriesPlato; 
	private int coccion; 
	private double precioPersona;
	private double vino;

	// Constructors
	public Restaurant(){
	}
	public Restaurant(String nomPlato, double caloriesPlato, int coccion, double precioPersona, double vino){
		this.nomPlato=nomPlato;
		this.caloriesPlato=caloriesPlato;
		this.coccion=coccion;
		this.precioPersona=precioPersona;
		this.vino=vino;
	}

	// Getters

	public String getnomPlato(){
		return this.nomPlato;
	}
	public double getcaloriesPlato(){
		return this.caloriesPlato;
	}
	public int getcoccion(){
		return this.coccion;
	}
	public double getprecioPersona(){
		return this.precioPersona;
	}
	public double getvino(){
		return this.vino;
	}

	// Setters

	public void setnomPlato(String nomPlato){
		this.nomPlato = nomPlato;
	}
	public void setcaloriesPlato(int caloriesPlato){
		this.caloriesPlato = caloriesPlato;
	}
	public void setcoccion(int coccion){
		this.coccion = coccion;
	}
	public void setprecioPersona(int precioPersona){
		this.precioPersona= precioPersona;
	}
	public void setvino(int vino){
		this.vino= vino;
	}

	// Otros metodos de la clase

	public String print(){
        return "Menu "+this.nomPlato+" contains "
        +this.caloriesPlato+" calories, comes with "
        +this.vino+" bottles and costs "
        +this.precioPersona+"$";
    }
}