import java.io.*;
import java.util.*;
public class codigoDeBarras {
	//Practica codigo de barras
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			ArrayList<Integer> codigo = new ArrayList<Integer>();
			ArrayList<String> result = new ArrayList<String>();
			String v="";
			int sumaCode=0;
			int j=0;

			System.out.println("Introduce el código de barras: ");
			v = buffer.readLine();
			while (Long.parseLong(v)!=0){
				for (int i=v.length()-1;i>=0;i--){
					codigo.add(Character.getNumericValue(v.charAt(i)));
				}
				for (int i=0;i<codigo.size();i++){
					if (i!=0){
						if (i%2==0){
							sumaCode+=codigo.get(i);
						} else {
							sumaCode+=(codigo.get(i)*3);
						}
					}
				}
				if (sumaCode%10==0){	
					if (codigo.size()<=8){
						result.add(j, "SI. EAN-8");
					} else{
						result.add(j, "SI. EAN-13");
					}
				} else{
					sumaCode+=codigo.get(0);
					if (sumaCode%10==0){
						if (codigo.size()<=8){
							result.add(j, "SI. EAN-8");
						} else{
							result.add(j, "SI. EAN-13");
						}
					} else{
						if (codigo.size()<=8){
							result.add(j, "NO. EAN-8");
						} else{
							result.add(j, "NO. EAN-13");
						}
					}
				} j++; codigo.clear(); sumaCode=0;
				System.out.println("Introduce el código de barras: ");
				v = buffer.readLine();
			}
			for (j=0;j<result.size();j++){
				System.out.println(result.get(j));
			}
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}