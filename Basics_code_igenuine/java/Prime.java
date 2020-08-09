import java.util.Scanner;
public class Prime
{
public static void main(String[]args)
//throws java.io.IOException
{
int num;
boolean isPrime;
//char ch;
//do
//{
Scanner sc=new Scanner(System.in);
System.out.println("Enter the Number");
num=sc.nextInt();
sc.close();
if(num<2)
isPrime=false;
else
isPrime=true;
for(int i=2;i<=num/i;i++)
{
if(num%i==0)
{
isPrime=false;
break;
}
}
if(isPrime)
System.out.println("Prime");
else
System.out.println("Not Prime");
//System.out.println("Do you want to continue:");
//ch= (char) System.in.read();
//}while(ch =='y'||ch =='Y');
}
}