import java.util.Scanner;
public class fibo
{
	public static void main(String[]args)
	{
		int i;
		int n,t1,t2,nxt;
		t1=0;
		t2=1;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the count");
		n=sc.nextInt();
		sc.close();
		for(i=1;i<=n;i++)
		{
			System.out.print(t1+" ");
			nxt=t1+t2;
			t1=t2;
			t2=nxt;
		}
	}
}