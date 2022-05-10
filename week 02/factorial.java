import java.util.Scanner;
public class factorial
{
public static void main(String[] args)
{
int num;
System.out.println("enter the number;");
Scanner s =new Scanner(System.in);
num=s.nextInt();
long fact =1;
int i=1;
while(i<=num)
{
fact=fact*i;
i++;
}
System.out.println("The factorial of "+num+" is; " +fact);
}
}