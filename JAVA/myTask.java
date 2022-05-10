class myTask extends Thread
{
@Override public void run()
{
for(int i=1;i<=10;i++)
{
System.out.println("in printer-2 "+i);
}
}
public static void main(String[] args)
{
Thread task=new Thread(); task.start();
}
}
class myTask1 implements Runnable
{
@Override public void run()
{
for(int i=1;i<=10;i++)
{
System.out.println("in printer-2 "+i);
}
}
public static void main(String[] args)
{
myTask r=new myTask(); Thread task=new Thread(r); task.start();
}
}