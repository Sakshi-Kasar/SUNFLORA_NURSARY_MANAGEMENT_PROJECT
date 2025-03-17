<?php
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["phone"];
$d=$_POST["message"];
$con=mysql_connect("localhost","root","");
mysql_query("use sak");
if($a!=" " &&$b!=" "&&$c!=" "&&$d!=" ")
{
mysql_query("insert into  contact values('$a','$b','$c','$d');");
echo("<script> alert('respose submitted') </script>");
header("Location:contact.html");
}

?>

