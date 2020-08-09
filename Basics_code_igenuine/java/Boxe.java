import java.util.Scanner;
class Box
{
double ht;
double wd;
double dp;
}
public class Boxe
{
public static void main(String[]args)
{

Box m=new Box();
double vol;
Scanner sc=new Scanner(System.in);
System.out.println("Enter the height:");
m.ht=sc.nextDouble();
System.out.println("Enter the width");
m.wd=sc.nextDouble();
System.out.println("Enter the Depth");
m.dp=sc.nextDouble();
sc.close();
vol=m.ht*m.wd*m.dp;
System.out.println("The volume of Box is "+vol);
}
}
