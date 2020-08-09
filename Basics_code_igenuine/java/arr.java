public class arr
{
public static void main(String[]args)
{
int month[]=new int[12];
month[0]=31;
month[1]=28;
month[2]=30;
month[3]=31;
month[4]=30;
month[5]=31;
month[6]=30;
month[7]=31;
month[8]=30;
month[9]=31;
month[10]=30;
month[11]=31;
System.out.println("The month of December has   "+month[11]+"   Days");
double n[]={11.2,23.9,12.6,19.4,33.8};
double result=0;
int i;
for(i=0;i<5;i++)
result=result+n[i];
System.out.println("The average is:"+result/5);
}
}
