import java.util.Scanner;
public class fact
{
	public static void main(String[]args)
	{
		int n,i;
		long fact=1;
		Scanner sc=new Scanner(System.in);
		System.out.println("enter the number");
		n=sc.nextInt();
		sc.close();
		if(n<=0)
		{
			System.out.println("Error");
		}
		else
		{
			for(i=1;i<=n;i++)
			{
				fact*=i;
			}
		}
	System.out.println("The factorial of "+n+" is "+fact);	
	}
}