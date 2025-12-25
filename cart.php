<?php
ob_start();
session_start();
include 'connection.php';
include 'header.php';

if(isset($_SESSION['cart']))
{
$cart=$_SESSION['cart'];
$cart1=explode(",",$cart);
$con=count($cart1);
$cartQty=$_SESSION['cartqty'];
$cartQty1=explode(",",$cartQty);
$conq=count($cartQty1);
}
else{

$con=0;
$cartQty=0;
}
?>
<script>
$(document).ready(function(){

    $("#checkout").click(function(){

var usi=$("#usid").html();
if(usi>0)
{
    window.location.replace("checkout.php");
}
else
{
    $("#myModal").show();
  
};

    })

    $("#closebtn").click(function(){

$("#myModal").hide();

})
});
</script>
<div class="container -3" style="margin-top: 25px;">
 <div class="row ">
<div class=" col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12  card cartcard">

  <?php
  $price1= 0;
  $quantity=0;
  $totamo=0;
for ($i=0;$i<$con;$i++) 
{
   $sql1="select * from product where id=$cart1[$i]";
    $res1=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_array($res1);
    ?>
<div class="row">
    <div id="usid" style="visibility:hidden;"><?php echo  isset($_SESSION['userid']); ?></div>
         <div class="col-4 col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
     <img src="assets\image\product\<?php echo $row['photo'] ?>" class="img-fluid flat-start cartimg" alt="...">
     </div>
    <div class="col-8 col-xxl-8 col-xl-8 col-lg-8 col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['productname']?></h5>
        <p class="card-text carttext">Rate-<?php echo $row['rate'];
         $price2= $price1+ $row['rate'];
        
        ?><br>
        Weight-<?php echo $row['weight']?><br>
        Size-<?php echo $row['size']?><br>
        Qty-<?php echo $cartQty1[$i];
        $amount=$row['rate']*$cartQty1[$i];
        $totamo=$totamo+$amount;
        ?><br>
        RestaurantId=<?php echo $row['restaurantid']?></p>
        <div style="color:black;font-weight: 600; background-color: lightgrey; width: initial;text-align: center;"> Amount=<?php echo  $amount; ?></div>
        <a href='deleteitem.php?cardid=<?php echo $i ?>' data-toggle='tooltip' data-placement='top' title='Delete'>
       <br>
        <i class='fa-sharp fa-solid fa-trash' style='color: #272727;margin-left:8px; float: right;'></i></a>
<br>
        
    </div>
  </div>
    </div>
 <br>
 <hr>
      <?php
}
$dvcharge=0;
$totAmtComp=$totamo+$dvcharge;
?>

</div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
  <div style=" width: 315px;border: 1px solid black;  margin: 20px; height:250px;">
  <span style="padding: 98px;
    text-transform: uppercase;
    font-weight: 700;">Price Detail</span><br><hr>
 <span style="padding: 7px; font-size: 16px; font-weight: 500;">Item </span>
 <span style=  "float: right; margin-right: 24px; font-weight: 500;"><?php echo $con;?></span><br><br>
 <span style="padding: 7px; font-size: 16px; font-weight: 500;">Amount</span>
 <span style=  "float: right; margin-right: 24px; font-weight: 500;"><?php echo $totamo;?></span><br>
<br>
<span style="padding: 7px; font-size: 16px; font-weight: 500;">Delivery Charges</span>
<span style="    float: right; margin-right: 24px; font-weight: 500;"><?php echo  $dvcharge;?></span><hr>
<span style="padding: 7px; font-size: 16px; font-weight: 500;">Total Amount</span>
 <span style=  "float: right; margin-right: 24px; font-weight: 500;"><?php echo  $totAmtComp;?></span>
 
</div> 
<!-- <button style="font-weight:600; color: white; background-color: green; border: none; width: 255px; height: 36px; margin-left: 46px;text-transform: capitalize;" ><a href="checkout.php color: white">checkOut
 </a></button> -->
 <!-- <a href="checkoutlogin.php">-->
  <button class="btnc "  id="checkout">checkOut</button>

  </div>

</div>
</div><br>

<?php
  include 'footer.php';
ob_flush();
?>
<div id="log" style="display:none;">


</div>
<div class="modal" id="myModal" style="display:none;">
        <div class="modal-dialog ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="closebtn"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" name="frmlogin" action="checkoutlogin.php">
                        <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd1" placeholder="Enter password"name="pswd">
                        </div>
                        <div class="modal-footer">
                            <div class="form-check mb-3">
                                <!-- <input type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal1" value="signup"> -->
                                <input type="reset" class="btn btn-dark" value="Reset">
                                <input type="submit" class="btn btn-dark" value="Submit">
                            </div>
                        </div>
                        <p style="text-align: center; font-weight: bold;  text-transform: capitalize;
"> New here! <a href="#" data-bs-toggle="modal" data-bs-target="#myModal1" >signup</a></p>
                            </form>
                        </div>
                   

                </div>
</div>
</div>
<div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">SignUp</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="closebtn"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" name="frmsignup" action="checkoutsignup.php">
                        <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="mb-3">
                            <label for="text">Full Name:</label>
                            <input type="text" class="form-control" id="nm" placeholder="Full Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="text">Mobile No.:</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile No." name="mobile"
                            maxlength="10" >
                        </div>
                        <div class="modal-footer">
                            <div class="form-check mb-3">
                                <input type="reset" class="btn btn-dark" value="Reset">
                                <input type="submit" class="btn btn-dark" value="Submit">
                            </div>
                             </div> 
                             <p style="text-align: center; font-weight: bold;  text-transform: capitalize;
"> Already Have A account! <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" >login</a></p>
                            </form>
                           </div>
                    
            </div>
</div>
</div>
   

