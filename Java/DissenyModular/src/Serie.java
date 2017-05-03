public class Serie {

	// Atributos de la clase persona con sus valores por defecto
	private String titulo; 
	private ArrayList<Integer> temporadas = new ArrayList<Integer>(3);
	private boolean entregado=false; 
	private String genero;
	private String creador; 

	// Constructors
	public Serie(){
	}
	public Serie(int titulo, int creador){
		this.titulo=titulo;
		this.creador=creador;
	}
	public Serie(String titulo, int temporadas, String genero, String creador){
		this.titulo=titulo;
		temporadas = new ArrayList<Integer>(temporadas);
		this.genero=genero;
		this.creador=creador;
		
	}

	// Getters
	
	public String getTitulo(){
		return this.titulo;
	}
	public int getTemporadas(){
		return this.temporadas;
	}
	public String getGenero(){
		return this.genero;
	}
	
	public String getCreador(){
		return this.creador;
	}

	// Setters

	public void setTitulo(String titulo){
		this.titulo=titulo;
	}
	public void setTemporadas(int temporadas){
		this.temporadas=temporadas;
	}
	public void setGenero(String genero){
		this.genero=genero;
	}
	public void setCreador(String creador){
		this.creador=creador;
	}
}