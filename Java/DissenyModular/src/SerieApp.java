public class SerieApp {

	public static void main (String[] args){
		
		Serie e = new Serie("negro", 5, "negro", "negro");
		System.out.println("Titulo: "+e.getTitulo()+" Temporadas: "+e.getTemporadas()+" Genero: "+e.getGenero()+" Creador: "+e.getCreador());
	}
}