class Stack
{
int stk[]=new int[10];
int tos;
Stack()
{
tos=-1;
}
void push(int item)
{
if (tos==9)
System.out.println("Stack is full");
else
stk[++tos]=item;
}
int pop()
{
if(tos<0){
System.out.println("Stack underflow");
return 0;}
else
return stk[tos--];
}
}
public class Tests
{
public static void main(String[]args)
{
Stack t1=new Stack();
Stack t2=new Stack();
for(int i=0;i<10;i++)
t1.push(i);
for(int i=10;i<20;i++)
t2.push(i);
System.out.println("Stack in T1:");
for(int i=0;i<10;i++)
System.out.println(t1.pop());
System.out.println("Stack in T2:");
for(int i=0;i<10;i++)
System.out.println(t2.pop());
}
}
