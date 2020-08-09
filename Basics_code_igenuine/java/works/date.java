import java.util.Scanner;
public class date
{
	public static void main(String[]args)
	{
		int dd,mm,yy;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter the date:(dd mm yyyy)");
		dd=sc.nextInt();
		mm=sc.nextInt();
		yy=sc.nextInt();
		if(yy>=1000 && yy<=9999)
		{
			if(mm>=1 && mm<=12)
			{
				if((dd>=1 && dd<=31)&&(mm==1||mm==3||mm==5||mm==7||mm==8||mm==10||mm==12))
				{

					System.out.println("The date is valid");
				}
				else if((dd>=1 && dd<=30)&&(mm==4||mm==6||mm==9||mm==11))
				{
					System.out.println("The date is valid");
				}
				else if((dd>=1 && dd<=28)&&(mm==2))
				{
					System.out.println("The date is valid");	
				}
				else
				{
					System.out.println("The date is invalid");
				}
			}
			else
			{
				System.out.println("The month is invalid");
			}
		}
		else
		{
			System.out.println("The year is invalid");
		}
	}
}