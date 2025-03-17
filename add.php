<html>
<body background="c.jpg" >
<?php
$con=mysql_connect("localhost","root","");
mysql_query("use sak");
echo("<center><table border='0.9' width='50%'>");
echo("<tr><th>name<th>prize<th>qty<th></tr>");
$row=mysql_query("select *from orders");
$t=0;
while($r1=mysql_fetch_array($row))
{
   echo("<tr>");
   echo("<th>".$r1[0]);
   echo("<th>".$r1[1]);
   echo("<th>".$r1[2]);
   echo("<th><a href='delete.php?id=".$r1[0]." '><button>X</button></a>");
   echo("</tr>");
  $t=$t+$r1[1]*$r1[2];
   }
echo("</table>");
 echo("<center><h3>Total=".$t);
?>
</body></html>