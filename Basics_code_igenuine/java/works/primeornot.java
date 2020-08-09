import java.util.Scanner;
class prime
{	int i;
	int count;
	int isPrime(int num)
	{
		for(i=1;i<=num;i++)
		{
			if(num%i==0)
			{
				count++;
			}	
		}
	return count;	
	}
}
public class primeornot
{
	public static void main(String[]args)
	{

	int flag=0;
	int n;
	Scanner sc=new Scanner(System.in);
	System.out.println("Enter the number:");
	n=sc.nextInt();
	sc.close();
	prime obj=new prime();
	flag=obj.isPrime(n);
		if(flag==2)
		{
			System.out.println(n+" is Prime");
		}
		else
		{
			System.out.println(n+" is not Prime");	
		}
	}
}
