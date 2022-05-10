import java.applet.Applet;
import java.awt.Color;
import java.awt.Graphics;
public class demo extends Applet 
{
    public void init()
    {
        setBackground(Color.yellow);
       
    }
    public void paint(Graphics g)
    {
        g.drawRect(10,60,40,30);
    }
}