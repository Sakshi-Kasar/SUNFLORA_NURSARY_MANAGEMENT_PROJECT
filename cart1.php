<?php    
$con = mysql_connect ("localhost", "root" , "" ) ;    
$ db="MCN";    
if ( ! $con)    
die ( ' Could not connect: ' . mysql_error( ) ) ;    
if (mysql_query ("CREATE DATABASE $db" , $con) )    
echo "Your Database Created Which Name is : $db";    
}    
else    
{    
echo "Error creating database: " . mysql_error( ) ;    
}    
mysql_close ($con) ;    
?>    
<?php  
$con = mysql_connect ("localhost", "root", "" ) ;  
if ( ! $con)  
die ( ' Could not connect: ' .mysql_error ( ) ) ;  
}  
mysql_select_db ("MCN", $con) ;  
$sql = "CREATE TABLE EMPLOYEE  
(  
Name varchar ( 50) ,  
)" ;  
mysql_query($sql, $con) ;  
mysql_close ($con) ;  
?>  <?php  
/* Database Connection */  
$sDbHost = 'localhost' ;  
$sDbName = 'mcn' ;  
$sDbUser = 'root';  
$sDbPud = '';  
$ Conn = mysql_connect ($sDbHost, $sDbUser, $sDbPwd);  
mysql_select_db ($sDbName, $Conn);  
?>  <html>  
<head>  
<title> PHP Form<</title>  
</head>  
<body bgcolor="pink">  
<h3>Insert Value From Checkboxes</h3>  
<form action="checkbox . php" method="post">  
<input type="checkbox" name="chkl[ ]" value="Vineet Saini">Vineet Saini<br />  
<input type="checkbox" name="chkl[ ]" value="Ravi Sharma">Ravi Sharma<br />  
<input type="checkbox" name="chkl[ ]" value="Rahul Dube">Rahul Dube<br />  
<input type="checkbox" name="chkl[ ]" value="Rajesh Verma">Rajesh Verma<br />  
<input type="checkbox" name="chkl[ ]" value="Priyanka Sachan"> Priyanka Sachan<br />  
<br>  
<input type="submit" name="Submit" value="Submit">  
</form>  
</body>  
</html>  
<php  
include ("config . php");  
$checkbox1 = $_POST['chkl'] ;  
if ($_POST["Submit" ]=="Submit")  
{  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO employee (name) VALUES ('".$checkboxl[$i]. "')";  
mysql_query($query) or die(mysql_error());  
}  
echo "Record is inserted";  
}  
?>  