<?php
session_start();
$busid=$_SESSION['busid'];
include 'connection.php';
$pname=$_POST['productname'];
$grate=$_POST['rate'];

$pweight=$_POST['weight'];
$pmeasure=$_POST['measurement'];
$psize=$_POST['size'];
$gdescription=$_POST['description'];
$status="Active";




$sql="insert into product(restaurantid,productname,rate,weight,measurement,size,description,status)values($busid,'$pname','$grate'
,'$pweight','$pmeasure','$psize','$gdescription','$status')";
$res=mysqli_query($conn,$sql);
$lastid=$conn->insert_id;
$gphoto=$_FILES['ph1'];
$gph_nm=$_FILES['ph1']['name'];
$gph_type=$_FILES['ph1']['type'];
$extension=array("jpeg","jpg","png");
$ext=strtolower(end(explode('.',$_FILES['ph1']['name'])));
$proid=$row['id'];
$_SESSION['proid']=$proid;
echo $proid;
if(in_array($ext,$extension)===false)
{
    $error[]="Extension no allowed";
}
$t="assets/image/product/";
$fnm1=$lastid.".".$ext;
$fnm=$t.$lastid.".".$ext;
move_uploaded_file($gphoto['tmp_name'], $fnm);
$sql1="update product set photo='$fnm1' where id='$lastid'";
$res1=mysqli_query($conn,$sql1);
header("location:businessdeshboard.php");

?>
