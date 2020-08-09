import java.util.Scanner;
public class vowel
{
	public static void main(String[]args)
	{
	
	String str;
	System.out.println("Enter the string:");
	Scanner sc=new Scanner(System.in);
	str=sc.next();
	sc.close();
			switch(str)
			{
				case"a":
				case"e":
				case"i":
				case"o":
				case"u":
				System.out.println("The alphabet is a vowel");
				break;
				default:
				System.out.println("The alphabet is a consonant");
			}
	}
}