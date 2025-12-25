<?php
session_start();
ob_start();
include 'connection.php';
include 'headerlink.php';
$em=$_POST['email'];
$pass=$_POST['pswd'];
$sql="select * from userinfo where email='$em' and password='$pass'";
$res=mysqli_query($conn,$sql);

$ro=mysqli_num_rows($res);
if ($ro>0)
{
     $row=mysqli_fetch_array($res);
     $userid=$row['id'];
     session_start();
     $_SESSION['userid']=$userid;
   header('location:checkout.php');
   
    exit();

}
else
{
    header('location:cart.php');
    exit();
}


?>
