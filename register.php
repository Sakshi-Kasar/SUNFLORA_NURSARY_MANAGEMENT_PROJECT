<html>
<head>
<style>
#aa{
 height:50;
width:80;
}

<?php
    $con=mysql_connect("localhost","root","");
    if($con==false)
    die("Error in connection");
    $user=$_POST["t1"];
    $pass=$_POST["t2"];
    mysql_query("use sak");
    mysql_query("insert into login values('$user','$pass')");
    header("Location:login.html");
?>
</script></head>
</body>
</html>