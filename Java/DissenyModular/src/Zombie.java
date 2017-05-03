public class Zombie {
	
	// Atributos de la clase persona con sus valores por defecto
	private String nombre;
	private int[] conversion;
	private int comunidad; 
	private int convertidos;

	// Constructors
	public Zombie(){
		this.nombre="";
		this.conversion = new int[5];
		this.comunidad=0;
		this.convertidos=0;
	}
	public Zombie(String nombre, int[] conversion, int comunidad, int convertidos){
		this.precioBase=precioBase;
		comprobarColor(color);
		comprobarConsumoEnergetico(consumoEnergetico);
		this.peso=peso;
	}

	// Getters
	
	public int getPrecioBase(){
		return this.precioBase;
	}
	public String getColor(){
		return this.color;
	}
	public char getConsumoEnergetico(){
		return this.consumoEnergetico;
	}
	
	public int getPeso(){
		return this.peso;
	}

	// Setters

	public void setPrecioBase(int precioBase){
		this.precioBase = precioBase;
	}
	public void setColor(String color){
		this.color = color;
	}
	public void setConsumoEnergetico(char consumoEnergetico){
		this.consumoEnergetico = consumoEnergetico;
	}
	public void setPeso(int peso){
		this.peso= peso;
	}

	// Otros metodos de la clase

	private void comprobarConsumoEnergetico(char consumoEnergetico){
        if(this.consumoEnergetico>='A' && this.consumoEnergetico<='F'){
        	this.consumoEnergetico=consumoEnergetico;
        }
    }
    private void comprobarColor(String color){
    	for(byte i=0;i<colores.length;i++){
    		if(color==colores[i]){
    			this.color=color;
    		}
    	}
    }
    public int precioFinal(){
        switch(this.consumoEnergetico){
            case 'A': this.precioBase += 100; break;
            case 'B': this.precioBase += 80; break;
            case 'C': this.precioBase += 60; break;
            case 'D': this.precioBase += 50; break;
            case 'E': this.precioBase += 30; break;
            case 'F': this.precioBase += 10; break;
        }
        if(this.peso>=0 && this.peso<=19)
            this.precioBase += 10;
        else if(this.peso>=20 && this.peso<=49)
            this.precioBase += 50;
        else if(this.peso>=50 && this.peso<=79)
            this.precioBase += 80;
        else if(this.peso>=80)
            this.precioBase += 100;
            
        return this.precioBase;
    }
}