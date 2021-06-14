<?php

$conn=mysqli_connect("LocalHost","root","","form"); 
$Id=$_POST['Id'];
$name =$_POST['uname'];

$email=$_POST['email'];

$upswd1=$_POST['upswd1'];

$upswd2=$_POST['upswd2'];
$result = mysqli_query($conn, "INSERT INTO form(Id,uname,email,upswd1,upswd2) VALUES('$Id','$uname','$email',$upswd1,$upswd2)");

register(Id,uname,email,upswd1,upswd2) VALUES('$Id','$uname','$email'$upswd1','$upswd2')");
if($result)
    echo "SUCCESSFULL";
else
    echo "Failed";

?>