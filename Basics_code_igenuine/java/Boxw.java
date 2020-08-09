class Boxs
{
double ht;
double wd;
double dp;
Boxs(double h,double w,double d )
{
ht=h;
wd=w;
dp=d;
}
double volume(){ return ht*wd*dp;}
}
public class Boxw
{
public static void main(String[]args)
{
Boxs t1= new Boxs(12.8,23.6,34.7);
Boxs t2= new Boxs(23.5,46.3,89.0);
double vol;
vol=t1.volume();
System.out.println("The volume of box is "+vol);
vol=t2.volume();
System.out.println("The volume of box is "+vol);
}
}
