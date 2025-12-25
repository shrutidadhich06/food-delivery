<?php
include 'header.php';
include 'connection.php';
$rid=$_GET['resid'];


?>
<br>
<div class="resname">
<?php
$sql1="select * from business where id=$rid";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($res1);
 echo $row['restaurantname'];
    ?>
 
    </div>
<br>
<div class="row gy-3  cafecard">
<?php
$sql="select * from product where $rid=restaurantid ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
  

    ?>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
    <form method="post" action="addtocart.php" name="itemfrm<?php echo $row['id'];?>">
    <div class="card h-100">
         <img src="assets\image\product\<?php echo $row['photo'] ?>" class="card-image" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $row['productname'] ?></h5>
        <p class="card-text1">Rate-<?php echo $row['rate'] ?> <br>
        Type-<?php echo $row['description'] ?> <br>
        Qty-
           <select class="" style="border-color:#000; font-weight: 500; " name="quantity">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
</select> 
    </p>
  <input type="text" class="d-none" value="<?php echo $row['id'];?>" name="pid">
  <input type="text"  class="d-none" value="<?php echo $rid;?>" name="rid">
  <input type="text"  class="d-none" value="resto" name="sendcart">
    <!-- <a href="order.php?pid=<?php //echo $row['id'];?>" class="btn btn-primary">ORDER</a>   -->
  <input type="submit" value="ADD TO CART" class="btn btn-primary">
 </div>
</div>
</form>
</div>
 
        
<?php
}
?>
</div>
