class Box
{
double ht;
double wd;
double dp;
}
public class Boxd
{
public static void main(String[]args)
{

Box m=new Box();
double vol;
m.ht=100;
m.wd=120;
m.dp=123;
vol=m.ht*m.wd*m.dp;
System.out.println("The volume of Box is "+vol);
}
}
