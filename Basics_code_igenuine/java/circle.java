import java.util.Scanner;
public class circle
{
	public static void main(String[]args)
	{	
		double area,ra,pi;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the Radius");
		ra=sc.nextDouble();
		sc.close();
		pi=3.1416;
		area=pi*ra*ra;
		System.out.println("The area of the Circle is:"+area);
	}
}