<?php
$fname=$_POST['foodname'];
$ftype=$_POST['foodtype'];
$status=$_POST['status'];
$fqty=$_POST['fqty'];
$fdate=$_POST['fdate'];
$conn=mysqli_connect('localhost','root','','fastfood');
$sql="insert into food(foodname,foodtype,status,qty,date)values('$fname','$ftype','$status',$fqty,'$fdate')";
$res=mysqli_query($conn,$sql);

echo "<script>alert('record save')</script>"
?>