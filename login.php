
<?php
    $con=mysql_connect("localhost","root","");
    if($con==false)
    die("Error in connection");
    $user=$_POST["t1"];
    $pass=$_POST["t2"];
    mysql_query("use sak");
   $res= mysql_query("select * from login"); 
  $k=0;
  while($row=mysql_fetch_array($res))
{
    if($user==$row[0] && $pass==$row[1])
{
    $k=1;
     echo("<h1>");
    header("Location:shruti/index.html");
}
}
if($k==0)
{

  echo("<h1>");
  echo("enter valid....");
  }


?>