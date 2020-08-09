import java.util.Scanner;
public class swap
{
public static void main(String[]args)
{
String str1,str2,temp;
System.out.println("Enter the string1:");
Scanner sc=new Scanner(System.in);
str1=sc.nextLine();
System.out.println("Enter the String2:");
str2=sc.nextLine();
sc.close();
System.out.println("Before Swap");
System.out.println("The String1 is: "+str1);
System.out.println("The String2 is: "+str2);
temp=str1;
str1=str2;
str2=temp;
System.out.println("After Swap");
System.out.println("The String1 is: "+str1);
System.out.println("The String2 is: "+str2);
}
}