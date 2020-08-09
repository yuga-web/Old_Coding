import java.util.Scanner;
public class even
{
	public static void main(String[]args)
	{
		int i;
		int m,n;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the limits to find the even numbers:");
		m=sc.nextInt();
		n=sc.nextInt();
		sc.close();
		
		for(i=m;i<=n;i++)
		{
			if(i%2==0)
			{
				System.out.println(i+" is even");
			}
			else
			{
				continue;
			}
		}
	}
}