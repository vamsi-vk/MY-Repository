import java.util.Scanner;
class eo
{
	public static void main(String[]args)
	{
		int n;
		System.out.println("enter the num");
		Scanner sc=new Scanner(System.in);
		n=sc.nextInt();
		if(n%2==0)
		{
			System.out.println(n+ "is even number ");
		}
		else
		{
			System.out.println(n+ "is odd num");
		}
	}
}