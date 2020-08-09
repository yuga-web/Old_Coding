import java.util.Scanner;
public class equal
{
	public static void main(String[]args)
	{
	String str1,str2;
	boolean isEqual=false;
	System.out.println("Enter the string1:");
	Scanner sc=new Scanner(System.in);
	str1=sc.nextLine();
	System.out.println("Enter the String2:");
	str2=sc.nextLine();
	sc.close();
		if(str1.equals(str2))
		{
			isEqual=true;
		}
		if(isEqual)
		{
			System.out.println("The strings are equal");
		}
		else
		{
			System.out.println("The strings are not equal");	
		}
		
	}
}