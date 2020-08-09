#include<stdio.h>
#include<string.h>
int main()
{
int i;
char cc;
char ch1[10],ch2[10];
char temp[10];
ccc:printf("\n Enter the first String:\n");
gets(ch1);
printf("Enter the Second String:\n");
gets(ch2);
printf("The Strings before swaping:\n");
puts(ch1);
puts(ch2);
strcpy(temp,ch1);
strcpy(ch1,ch2);
strcpy(ch2,temp);
printf("The Strings after swaping:\n");
puts(ch1);
puts(ch2);
printf("do you want to coninue?\n");
cc=getchar();
switch(cc)
{
case'y':
printf("\nOKAY");
goto ccc;
case'n':
printf("\nEXIT");
break;
default:
printf("Going to Exit");
}
return 0;
}