<?php
session_start();
include 'connection.php';
include 'headerlink.php';
$qty=$_POST['quantity'];
$proid=$_POST['pid'];
$rid=$_POST['rid'];
$sendcart=$_POST['sendcart'];

if(isset($_SESSION['cart']))
{
$cart=$_SESSION['cart'];
$cartQty=$_SESSION['cartqty'];
$restID=$_SESSION['restID'];
$cart=$cart.",".$proid;
$_SESSION['cart']=$cart;

$cartQty=$cartQty.",".$qty;
$_SESSION['cartqty']=$cartQty;

$restID=$restID.",".$rid;
$_SESSION['restID']=$restID;
}
else{
    $cart=$proid;
$_SESSION['cart']=$cart;

$cartQty=$qty;
$_SESSION['cartqty']=$cartQty;

$restID=$rid;
$_SESSION['restID']=$restID;
}
// $proid=$_GET['pid'];
// $rid=$_GET['rid'];




echo "welcome".$proid;
if($sendcart=="search")
{
    header("location:searchedproduct.php");
    exit();
}
else
{
    header("location:rest_menu.php?resid=$rid");
    exit();
}

?>
