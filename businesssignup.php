<?php
include 'connection.php';
$rname=$_POST['RestaurantName'];
$raddress=$_POST['address'];
$rcity=$_POST['City'];
$rstate=$_POST['State'];
$rmobile=$_POST['MobileNo'];
$rowner=$_POST['Owner'];
$remail=$_POST['Email'];
$rpass=$_POST['password'];
$rstatus="Active";

$sql="insert into business(restaurantname,address,city,state,mobile,owner,email,password,status)values('$rname','$raddress','$rcity','$rstate','$rmobile','$rowner','$remail','$rpass','$rstatus')";
$res=mysqli_query($conn,$sql);
// echo "<script>alert('record save')</script>"

$lastid1=mysqli_insert_id($conn);
$rphoto=$_FILES['ph2'];
$rph_nm=$_FILES['ph2']['name'];
$rph_type=$_FILES['ph2']['type'];
$extension1=array("jpeg","jpg","png");
$fnm=explode('.',$_FILES['ph2']['name'] );
$ext1=strtolower(end($fnm));
if(in_array($ext1,$extension1)===false)
{
    $error[]="Extension no allowed";
}
$t="assets/image/restaurant/";
$fnm2=$lastid1.".".$ext1;
$fnm1=$t.$lastid1.".".$ext1;
move_uploaded_file($rphoto['tmp_name'], $fnm1);
$sql1="update business set photo='$fnm2' where id='$lastid1'";
$res1=mysqli_query($conn,$sql1);
header("location:businessform.php");
?>
