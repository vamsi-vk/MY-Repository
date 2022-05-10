import java.util.Scanner;
public class grade
{
public static void main(String[] args)
{
Scanner s =new Scanner (System.in);
System.out.print("enter percentage;");
double per=s.nextDouble();
if (per>=90)
{
System.out.println("excellent;Grade A");
}
else if(per <90 && per>=80){
System.out.println("verygood;Grade B");
}
else if(per <80 && per>=70){
System.out.println("good;Grade C");
}
else if(per <70 && per>=60){
System.out.println("satisfactory;Grade D");
}
else if(per <60 && per>=50){
System.out.println("just passed;Grade E");
}
else{
System.out.println("Failed");
}
}
}