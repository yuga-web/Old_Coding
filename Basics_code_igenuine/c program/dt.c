#include<stdio.h>
int main()
{
char ch;
int a,b,c;
printf("enter num1\t");
scanf("%d",&a);
printf("enter num2\t");
scanf("%d",&b);
c=a+b;
printf("the sum is %d",c);
printf("Press Enter To Exit");
ch=getchar();
return(0);
}