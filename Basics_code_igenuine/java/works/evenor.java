import java.util.Scanner;
public class evenor
{
	public static void main(String[]args)
	{
		boolean isEven;
		int num;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the number:");
		num=sc.nextInt();
		sc.close();
		if(num%2==0)
		{
			isEven=true;
		}
		else
		{
			isEven=false;
		}
		if(isEven)
		{
			System.out.println(num+" is even number");	
		}	
		else
		{
			System.out.println(num+" is not even number");

		}
	}
}