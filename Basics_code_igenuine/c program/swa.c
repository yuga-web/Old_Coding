#include<stdio.h>
int main()
{
char ch;
int num1,num2;
do
{
printf("\nEnter num1 and num2\n");
scanf("%d%d",&num1,&num2);
printf("\n number before swap are\n num1= %d\n num2= %d",num1,num2);
num2=num1+num2;
num1=num2-num1;
num2=num2-num1;
printf("\n the numbers after swap are ");
printf("\n num1= %d",num1);
printf("\n num2= %d",num2);
printf("\nDo you want to continue\n");
ch=getchar();
}
while(ch=='y'||ch=='Y');
return 0;
}