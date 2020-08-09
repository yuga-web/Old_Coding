import java.util.Scanner;
public class key
{
public static void main(String[]args)
{
String str;
System.out.println("Enter the string:");
Scanner sc=new Scanner(System.in);
str=sc.nextLine();
sc.close();
System.out.println("The input is: "+str);
}
}