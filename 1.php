import Currencycon.*;
import Distancecon.*;
import Timecon.*;
import java.util.*;
class  Convert
{
	public static void main(String[] args) 
	{
int ch;
Scanner sc=new Scanner(System.in);
Curr c=new Curr();
Dis d=new Dis();
Tim t=new Tim();
System.out.println("1 for dollar to INR");
System.out.println("2 for INR to Dollar");
System.out.println("3 for yen to INR");
System.out.println("4 for INR to yen");
System.out.println("5 for Euro to INR");
System.out.println("6 for INR to Euro");
System.out.println("7 for meter to Kilometer");
System.out.println("8 for km to m");
System.out.println("9 for miles to km");
System.out.println("10 for km to miles");
System.out.println("11 for hours to mins");
System.out.println("12 for mins to hrs");
System.out.println("13 for hrs to sec");
System.out.println("14 for sec to hrs");
System.out.println("Enter your choice");
ch=sc.nextInt();
switch(ch)
{
case 1:
c.dtoi();
break;
case 2:
c.itod();
break;
case 3:
c.ytoi();
break;
case 4:
c.itoy();
break;
case 5:
c.etoi();
break;
case 6:
c.itoe();
break;
case 7:
d.mtokm();
break;
case 8:
d.kmtom();
break;
case 9:
d.mitokm();
break;
case 10:
d.kmtomi();
break;
case 11:
t.htom();
break;
case 12:
t.mtoh();
break;
case 13:
t.htos();
break;
case 14:
t.stoh();
break;
default :
System .out.println("Enter the valid number from 1-14");

	}
}
}
