import java.util.Scanner;
public class multip
{
public static void main(String[] args)
{
Scanner s= new Scanner(System.in);
System.out.print("enter number;");
int n=s.nextInt();
for (int i=1;i<=20;i++)
{
System.out.println(n+" * "+i+"="+n*i);
}
}
}