import java.util.Scanner;
public class subsc
{
	public static void main(String[]args)
	{
		int n1,n2,sub;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the First Number:");
		n1=sc.nextInt();
		System.out.println("Enter the Second Number");
		n2=sc.nextInt();
		sc.close();
		sub=n1-n2;
		System.out.println("The subraction of Two Numbers:"+sub);
	}
}
		