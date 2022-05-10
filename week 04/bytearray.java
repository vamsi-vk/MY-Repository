import java.util.Scanner;
  
class bytearray
 {
  
    public static void main(String[] args)
    {
  
         String ss;
      Scanner in = new Scanner(System.in);
     
      System.out.println("Enter the  string");
      ss = in.nextLine();
      System.out.println("The entered String: " + ss);
       byte[] res = ss.getBytes();
       System.out.println("Byte Array:");
        for (int i = 0; i < res.length; i++)
 {
            System.out.print(res[i]);
        }
    }
}
      