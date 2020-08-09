class rr
{
int a;
int b;
rr(int i,int j)
{
a=i;
b=j;
}
void display()
{
System.out.println("The value got is: "+a+" "+b);
}
void meth()
{
a+=10;
b+=20;
}
}
public class tt
{
public static void main(String[]args)
{
rr tp=new rr(12,13);
rr ts=new rr(22,45);
tp.display();
ts.display();
tp.meth();
ts.meth();
System.out.println("The value after increment :");
tp.display();
System.out.println("The value after increment :");
ts.display();
}
}