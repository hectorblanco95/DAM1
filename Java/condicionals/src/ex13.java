import java.io.*;
public class ex13{
	//Una empresa que es dedica a la venda de desinfectants necessita un programa per a gestionar les factures. A cada factura figura: el codi de lâ€™article, la quantitat venuda en litres i el preu per litre. Escriure un programa en Java que demani 5 factures. Per a cada factura sâ€™hauraÌ€ de demanar la informacioÌ� corresponent (codi de lâ€™article, quantitat venuda en litres, preu per litre). A partir dâ€™aquesta informacioÌ�, caldraÌ€ calcular el seguÌˆent i mostrar per pantalla amb un missatge de text: FacturacioÌ� total, quantitat de litre venuts de lâ€™article 1 i nombre de factures que es van emetre amb un import superior a 600â‚¬.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));
			System.out.println("Factura 1:");
			String factura = buffer.readLine();
			System.out.println("Codigo del articulo:");
			String articulo = buffer.readLine();
			System.out.println("Cantidad venuda en litros:");
			String litros = buffer.readLine();
			System.out.println("Precio por litro");
			String preulitre = buffer.readLine();
			System.out.println("Factura 2:");
			String factura2 = buffer.readLine();
			System.out.println("Codigo del articulo:");
			String articulo2 = buffer.readLine();
			System.out.println("Cantidad venuda en litros:");
			String litros2 = buffer.readLine();
			System.out.println("Precio por litro");
			String preulitre2 = buffer.readLine();
			System.out.println("Factura 3:");
			String factura3 = buffer.readLine();
			System.out.println("Codigo del articulo:");
			String articulo3 = buffer.readLine();
			System.out.println("Cantidad venuda en litros:");
			String litros3 = buffer.readLine();
			System.out.println("Precio por litro");
			String preulitre3 = buffer.readLine();
			System.out.println("Factura 4:");
			String factura4 = buffer.readLine();
			System.out.println("Codigo del articulo:");
			String articulo4 = buffer.readLine();
			System.out.println("Cantidad venuda en litros:");
			String litros4 = buffer.readLine();
			System.out.println("Precio por litro");
			String preulitre4 = buffer.readLine();
			System.out.println("Factura 5:");
			String factura5 = buffer.readLine();
			System.out.println("Codigo del articulo:");
			String articulo5 = buffer.readLine();
			System.out.println("Cantidad venuda en litros:");
			String litros5 = buffer.readLine();
			System.out.println("Precio por litro");
			String preulitre5 = buffer.readLine();

			double articulo6 = Double.parseDouble(articulo);
			double litros6 = Double.parseDouble(litros);
			double preulitre6 = Double.parseDouble(preulitre);		
			double articulo7 = Double.parseDouble(articulo2);
			double litros7 = Double.parseDouble(litros2);
			double preulitre7 = Double.parseDouble(preulitre2);			
			double articulo8 = Double.parseDouble(articulo3);
			double litros8 = Double.parseDouble(litros3);
			double preulitre8 = Double.parseDouble(preulitre3);			
			double articulo9 = Double.parseDouble(articulo4);
			double litros9 = Double.parseDouble(litros4);
			double preulitre9 = Double.parseDouble(preulitre4);			
			double articulo10 = Double.parseDouble(articulo5);
			double litros10 = Double.parseDouble(litros5);
			double preulitre10 = Double.parseDouble(preulitre5);

			double factura6=litros6*preulitre6;
			double factura7=litros7*preulitre7;
			double factura8=litros8*preulitre8;
			double factura9=litros9*preulitre9;
			double factura10=litros10*preulitre10;
			double facturatotal=factura6+factura7+factura8+factura9+factura10;

			if (factura6>600){
				System.out.println("Facturación total: " + facturatotal + ", cantidad de litros vendidos del artículo 1: " + litros6 + " y el nombre de facturas emitidas con un importe superior a 600€: " + factura);
			} if (factura7>600){
				System.out.println("Facturación total: " + facturatotal + ", cantidad de litros vendidos del artículo 1: " + litros6 + " y el nombre de facturas emitidas con un importe superior a 600€: " + factura2);
			} if (factura8>600){
				System.out.println("Facturación total: " + facturatotal + ", cantidad de litros vendidos del artículo 1: " + litros6 + " y el nombre de facturas emitidas con un importe superior a 600€: " + factura3);
			} if (factura9>600){
				System.out.println("Facturación total: " + facturatotal + ", cantidad de litros vendidos del artículo 1: " + litros6 + " y el nombre de facturas emitidas con un importe superior a 600€: " + factura4);
			} if (factura10>600){
				System.out.println("Facturación total: " + facturatotal + ", cantidad de litros vendidos del artículo 1: " + litros6 + " y el nombre de facturas emitidas con un importe superior a 600€: " + factura5);
			} else{
				System.out.println("Facturación total: " + facturatotal + ", cantidad de litros vendidos del artículo 1: " + litros6 + " y el nombre de facturas emitidas con un importe superior a 600€: Ninguna");
			}
		}

		catch (Exception e){

			System.out.println("Error");

		}	
	}
}