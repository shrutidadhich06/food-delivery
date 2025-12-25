<?php
include 'connection.php';
$pid=$_GET['pid'];
$sql="delete from product where id=$pid";
$res=mysqli_query($conn,$sql);
header("location:viewproduct.php");
?>