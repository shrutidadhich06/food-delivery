<?php
ob_start();
session_start();
include 'connection.php';
$searchpro=$_POST['search'];
$sql="SELECT * from product WHERE productname = '$searchpro' OR productname LIKE '$searchpro%' ";
$res=mysqli_query($conn,$sql);
echo $sql;
if($res)
 {
   $row=mysqli_fetch_array($res);
   $_SESSION['proname']=$row['productname'];
   $proid=$row['id'];
   $_SESSION['proid']=$proid;
   header("location:searchedproduct.php");
  
   
 }
 else
 {
    echo "failed";
 }
 
ob_flush();
?>