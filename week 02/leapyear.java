import java.util.Scanner;
public class leapyear
{
public static void main(String[] args)
{
int year;
Scanner s =new Scanner (System.in);
System.out.print("enter a year;");
year=s.nextInt();
if (year%4==0)
{
if (year%100==0)
{
if(year%400==0)
{
System.out.println("A leap year");
}
else
{
System.out.println("not a leap year");
}
}
else{
System.out.println("A leap year");
}
}
else{
System.out.println("not a leap year");
}
}
}