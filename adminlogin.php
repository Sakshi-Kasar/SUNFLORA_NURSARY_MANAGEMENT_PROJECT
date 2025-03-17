<?php
    $con=mysql_connect("localhost","root","");
    if($con==false)
    die("Error in connection");
    $user=$_POST["t1"];
    $pass=$_POST["t2"];
    if($user=="Sunflora" && $pass==123)
    header("Location:admin.php");
?>