<?php
ob_start();
session_start();
$cart=$_SESSION['cart'];

$cart1=explode(",",$cart);
$con=count($cart1);
$cardid=$_GET['cardid'];


unset($cart1[$cardid]);

$cart=implode(",",$cart1);
$_SESSION['cart']=$cart;


$cartQty=$_SESSION['cartqty'];
$cartQty1=explode(",",$cartQty);
$conq=count($cartQty1);
unset($cartQty1[$cardid]);
if($con==1)
{
    unset($_SESSION['cart']);
}
if($conq==1)
{
    unset($_SESSION['cartqty']);
}


header("location:cart.php");
exit();


?>