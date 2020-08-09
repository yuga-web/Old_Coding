import java.util.Scanner;
import java.lang.Math;
public class ams
{
	public static void main(String args[])
	{
		int num1,num2,num3,d,sum=0;
		int len=0;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the number:");
		num1=sc.nextInt();
		sc.close();
		num2=num1;
		num3=num1;
		while(num3!=0)
		{
			num3=num3/10;
			len++;
		}
		while(num2!=0)
		{
			d=num2%10;
			sum+=Math.pow(d,len);
			num2=num2/10;
		}
		if(sum==num1)
		{
			System.out.println(num1+" is Amstrong");
		}
		else
		{
			System.out.println(num1+" is not Amstrong");
		}
	}
}