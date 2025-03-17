<html>
<head>
<style> 

        table, 
        th, 
        td { 

            border: 2px solid black; 

            border-collapse: collapse; 
            border-color:purple ;
        } 

  body
{
     background-color:green;
}

        th, 

        td { 

            padding:6px; 

            text-align: left; 

        } 

    th{
      background-color:faintgreen;
}

        table#aa { 

            width: 80%; 
            background-color: pink;

        } 

    </style>
<?php
$con=mysql_connect("localhost","root","");
mysql_query("use sak");
echo("</head>");
echo("<body background='g21.jpg'>");
echo("<center>");
echo("<h3><b><font color='cyan'> Responses</font></b>");
echo("<table border='2' id='aa'>");
echo("<tr><th>name<th>email<th>phone<th>related</tr>");
$res=mysql_query("select *from contact");
while($row=mysql_fetch_array($res))
{
  echo("<tr>");
  echo("<td>".$row[0]);
   echo("<td>".$row[1]);
     echo("<td>".$row[2]);
      echo("<td>".$row[3]);
    echo("</tr>");
}
echo("</table>");
echo("<br><br>");
echo("<form action='index.html'>");
echo("<input type='submit' value='back' height='40' width='50'>");
echo("</body>");
echo("</html>");

?>
