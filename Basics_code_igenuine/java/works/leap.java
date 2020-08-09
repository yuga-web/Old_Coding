import java.util.Scanner;
public class leap
{
	public static void main(String[]args)
	{
		int yr;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the year:");
		yr=sc.nextInt();
		sc.close();
		if(yr%4==0)
		{
			System.out.println(yr+" is leap year");
		}
		else
		{
			System.out.println(yr+" is not leap year");	
		}
	}
}