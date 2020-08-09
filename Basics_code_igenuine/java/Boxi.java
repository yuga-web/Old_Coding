class Boxs
{
	private double ht;
	private double wd;
	private double dp;
		Boxs(double h,double w,double d )
		{
			ht=h;
			wd=w;
			dp=d;
		}
		Boxs( )
		{
			ht=-1;
			wd=-1;
			dp=-1;
		}
		
		double volume()
		{
		 return ht*wd*dp;
		}
}
class Boxweight extends Boxs
{
	double weg;
	Boxweight(double h,double w,double d,double m){
		super(h,w,d);
		weg=m;
	}
}
public class Boxi
{
public static void main(String[]args)
{
Boxweight t1= new Boxweight(2.5,4.0,3.0,7.8);
Boxweight t2= new Boxweight(23.5,4.6,3.5,89.0);
double vol;
vol=t1.volume();
System.out.println("The volume of box is "+vol);
System.out.println("The weight of box is "+t1.weg);
vol=t2.volume();
System.out.println("The volume of box is "+vol);
System.out.println("The weight of box is "+t2.weg);
}
}
