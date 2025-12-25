<?php
ob_start();
session_start();
include 'connection.php';
$paystatus="no";
$paymode="cod";

$uid=$_SESSION['userid'];
$useradd=$_POST['address'];
$usercity=$_POST['city'];
$userpincode=$_POST['pincode'];
date_default_timezone_set("Asia/Calcutta");
$dt=date("Y-m-d H:i:s");
$sql3="UPDATE userinfo SET address='$useradd',city='$usercity', pincode='$userpincode' WHERE id='$uid'" ;
 $res3=mysqli_query($conn,$sql3);
 if($res3)
 {
        header("location:checkout.php"); 
}
 else{
    echo "failed";
 }


$sql="insert into prorder(dnt,paymentmode,paymentstatus,user_id,address,city,pincode) values('$dt','$paymode','$paystatus','$uid','$useradd','$usercity','$userpincode')";
$res=mysqli_query($conn,$sql);
$orderid=$conn->insert_id;

  if($res)
  {
   if(isset($_SESSION['cart']))
   {
   $cart=$_SESSION['cart'];
   $cart1=explode(",",$cart);
   $con=count($cart1);
   $cartQty=$_SESSION['cartqty'];
   $cartQty1=explode(",",$cartQty);
   $conq=count($cartQty1);
   }

   for ($i=0;$i<$con;$i++) 
{
$prid=$cart1[$i];
$prqty=$cartQty1[$i];
$sql2="select * from product where id=$prid";
    $res2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($res2);
   $rate=$row2['rate'];
   $restid=$row2['restaurantid'];
   $sql1="insert into orderdetail(orderid,productid,qty,rate,restaurantid) values('$orderid','$prid','$prqty','$rate','$restid')";
   $res1=mysqli_query($conn,$sql1);

   //header(echo "<script> alert('order confirm')</script>);
   echo '<script type ="text/JavaScript">';  
echo 'alert("order confirm")';  
echo '</script>'; 


unset($_SESSION['cart']);
unset($_SESSION['cartqty']);

header('location:userdeshboard.php');
}   


}
else
{
    echo "failed";
}

 ob_flush();

?>