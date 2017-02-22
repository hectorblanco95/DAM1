import java.io.*;
public class ex05 {
	//Escriure un programa en Java que llegeixi de teclat 10 nombres enters, els quals haureu d’emmagatzemar en un array. El programa haurà de comptar el nombre de canvis de signe que hi ha. Un canvi de signe és l’aparició de dos enters de signes diferents, separats com a màxim per zeros.
	public static void main(String[] args) {

		try{

			BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

			int[] n= new int[10];
			int c=0;
			for(int i=0;i<n.length;i++){
				n[i]=Integer.parseInt(buffer.readLine());
				if (n[i]==0){
					c++;
				}
			}
			for(int i=0;i<n.length;i++){
				System.out.print(n [i]+" ");
			}
			System.out.println();
			int j=0;
			int[] m= new int [10-c];
			for(int i=0;i<n.length;i++){
				if (n[i] !=0){
					m[j]=n[i];
					j++;
				}
			}
			int cambioSigno=0;
			for(int i=0;i<m.length-1;i++){
				if (m[i]>0 && m[i+1]<0){
					cambioSigno++;
				} if (m[i]<0 && m[i+1]>0){
					cambioSigno++;
				}
			}
			System.out.println("Hay " + cambioSigno + " cambios de singno");
		}
		catch (Exception e){

			System.out.println("Error " + e);
		}
	}
}