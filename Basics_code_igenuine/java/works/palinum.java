import java.util.Scanner;
public class palinum
{
	public static void main(String[]args)
	{
		int num1,num2,d,rev=0;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the number");
		num1=sc.nextInt();
		sc.close();
		num2=num1;
		while(num2!=0)
		{
			d=num2%10;
			rev=(rev*10)+d;
			num2=num2/10;
		}
		if(rev==num1)
		{
			System.out.println(num1+" is a palindrime");
		}
		else
		{
			System.out.println(num1+" is not a palindrome");
		}
	}
}