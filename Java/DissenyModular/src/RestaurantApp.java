public class RestaurantApp {

	public static void main (String[] args){
		
		// create 5 objects of the class Restaurant
		Restaurant m1 = new Restaurant("Stamppot boerenkool", 564.65, 45, 20.5, 0.5);
        Restaurant m2 = new Restaurant("Metworst", 345, 12, 10.99, 0);
        Restaurant m3 = new Restaurant("Hutspot", 560.4, 65, 30.9, 1);
        Restaurant m4 = new Restaurant("Biefstuk", 780, 46, 50.34, 2);
        Restaurant m5 = new Restaurant("Kibbeling", 450.4, 23, 20.78, 1);
        
        //Creation of the array and toString() print loop
        Restaurant[] menus = {m1, m2, m3, m4, m5};
        for(int i=0; i<menus.length; i++)
            System.out.println(menus[i].print());
            
        //Cooking time loop
        for(int i=0; i<menus.length; i++){
            if(menus[i].getcoccion() < 30)
                System.out.println(menus[i].getnomPlato()+" cooks in "+menus[i].getcoccion()+" minutes");
        }
        
        //Total price
        double totalprice = 0;
        for(int i=0; i<menus.length; i++)
            totalprice += menus[i].getprecioPersona();
        System.out.println("The total price is: "+totalprice+"$");
        
        // Discounted price
        if(totalprice > 65)
            System.out.println("The discounted price is: "+(totalprice-totalprice*0.1)+"$");
	}
}