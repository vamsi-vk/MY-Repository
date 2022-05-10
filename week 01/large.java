import java.util.Scanner;
class large
{
	public static void main(String args[])
	{
		int a,b,c;
		Scanner s=new Scanner(System.in);
		System.out.println("enter the 1st number");
		a=s.nextInt();
		System.out.println("enter the 2nd number");
		b=s.nextInt();
		System.out.println("enter the 3rd number");
		c=s.nextInt();
		if(a>b &&a>c)
		{
			System.out.println(a+" is large");
		}
		else if(b>c)
		{
			System.out.println(b+" is large");

		}
		else
		{
			System.out.println(c+" is large");
		}
	}
}

		

