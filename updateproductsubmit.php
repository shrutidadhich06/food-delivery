<?php
include 'connection.php';
$pid=$_POST['pid'];
 $rate=$_POST['rate'];
 $weight=$_POST['weight'];
 $size=$_POST['size'];
 $description=$_POST['description'];
 $measurement=$_POST['measurement'];
$sql="UPDATE product SET rate='$rate',weight='$weight',size='$size',description='$description',measurement='$measurement'  WHERE id='$pid'" ;
 $res=mysqli_query($conn,$sql);
 if($res)
 {
     header("location:viewproduct.php");
 }
 else{
    echo "failed";
 }

?>


