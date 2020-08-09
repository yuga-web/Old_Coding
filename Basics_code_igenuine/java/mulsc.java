import java.util.Scanner;
public class mulsc
{
	public static void main(String[]args)
	{
		int n1,n2,mul;
		Scanner as=new Scanner(System.in);
		System.out.println("Enter the First Number");
		n1=as.nextInt();
		System.out.println("Enter the Second Number");
		n2=as.nextInt();
		as.close();
		mul=n1*n2;
		System.out.println("The Multiplication of Two Numbers is:"+mul);
	}
}