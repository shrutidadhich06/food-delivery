<?php
session_start();
include 'connection.php';
$rem=$_POST['email'];
$rpass=$_POST['password'];

$sql="select * from business where email='$rem' and password='$rpass'";
$res=mysqli_query($conn,$sql);
$ro=mysqli_num_rows($res);
if ($ro>0)
{
    $row=mysqli_fetch_array($res);
      $busid=$row['id'];
      $_SESSION['busid']=$busid;
echo $busid;
   header('location:businessdeshboard.php');

}
else
{
    header('location:businessform.php');
}


?>
