#include<stdio.h>
void swap(char**,char**);
int main()
{
char *str,*st;
printf("Enter the String\n");
gets(str);
gets(st);
printf("The Strings before Swap\n%s %s",str,st );
swap(&str,&st);
printf("The Strings After Swap\n %s %s",str,st);
return 0;
}
void swap(char **str1,char **str2)
{
char*temp=*str1;
*str1=*str2;
*str2= temp;
}