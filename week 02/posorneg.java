import java.util.Scanner;
public class posorneg
{
public static void main(String[] args)
{
int num;
Scanner s =new Scanner (System.in);
System.out.print("enter a number;");
num=s.nextInt();
if (num>0)
{
System.out.println("The number is postive");
}
else{
System.out.println("The number is negative");
}
}
}