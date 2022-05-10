import java.util.Scanner; 
class diagonal
{ 
    public static void main(String[] args) 
    {
        int m, n, temp;
        Scanner sc = new Scanner(System.in); 
        System.out.println("Enter number of rows "); 
        m = sc.nextInt(); 
        System.out.println("Enter number of columns "); 
        n = sc.nextInt(); 
        int a[][] = new int[m][n];
        if (m == n) 
        { 
            System.out.println("Enter all the values of matrix ");
            for (int i = 0; i < m; i++) 
            { 
                for (int j = 0; j < n; j++) 
                { 
                    a[i][j] = sc.nextInt(); 
                } 
            } 
  
            System.out.println("Original Matrix:");
            for (int i = 0; i < m; i++) { 
                for (int j = 0; j < n; j++) { 
                    System.out.print(a[i][j] + " "); 
                } 
                System.out.println(""); 
            } 
            for (int j = 0; j < m; j++) 
            { 
                temp = a[j][j]; 
                a[j][j] = a[j][n - 1 - j]; 
                a[j][n - 1 - j] = temp; 
            } 
            System.out.println("After interchanging diagonals of matrix ");
            for (int i = 0; i < m; i++) { 
                for (int j = 0; j < n; j++) { 
                    System.out.print(a[i][j] + " "); 
                } 
                System.out.println(""); 
            } 
        }       
        else 
        { 
            System.out.println("Rows not equal to columns"); 
        } 
    } 
}