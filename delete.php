<?php
$id=$_GET['id'];
echo("$id");
$con=mysql_connect("localhost","root","");
mysql_query("use sak");
mysql_query("delete from orders where name='$id' ");
echo("dele..");
header("Location:add.php");

?>