import java.util.Scanner;
public class average
{
	public static void main(String[]args)
	{
		int n1,n2,n3;
		double avg;
		Scanner sc=new Scanner (System.in);
		System.out.println("Enter the first number:");
		n1=sc.nextInt();
		System.out.println("Enter the second number:");
		n2=sc.nextInt();
		System.out.println("Enter the third number:");
		n3=sc.nextInt();
		sc.close();
		avg=(n1+n2+n3)/3.0;
		System.out.println("The average  is: "+avg);
	}
}