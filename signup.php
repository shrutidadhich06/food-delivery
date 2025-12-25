<?php
include 'connection.php';
$femail=$_POST['email'];
$fpassword=$_POST['pswd'];
$fname=$_POST['name'];
$fmobile=$_POST['mobile'];
$sql="insert into userinfo (email,password,name,mobile) values('$femail','$fpassword','$fname','$fmobile')";
$res=mysqli_query($conn,$sql);
header("location:index.php");
?>
