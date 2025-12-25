<?php
ob_start();
session_start();
include 'header.php';
include 'connection.php';
$pn=$_SESSION['proname'];

 ?>
<div class="row gy-3 my-3 ">
    <style>
.pname{
    margin-left: 27px;

}
</style>
    <?php
$sql="select * from product where productname='$pn'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
    $restid=$row['restaurantid'];
    
    ?>
    <div class=" col-6 col-sm-6 col-md-4 col-lg-3">
    <form method="post" action="addtocart.php" name="itemfrm<?php echo $row['id'];?>">
        <div class="card h-100 pname">
            <img src="assets\image\product\<?php echo $row['photo'] ?>" class="card-image" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['productname'] ?></h5>
                <?php
                $sql1="select * from business where id='$restid'";
                $res1=mysqli_query($conn,$sql1);
                while($row1=mysqli_fetch_array($res1))
                {
                    ?>
                    <p class="card-text1">Restaurent Name-<?php echo $row1['restaurantname'] ?><br>
                  Rate-<?php echo $row['rate'] ?><br>
                Type-<?php echo $row['description'] ?><br>
                Size-<?php echo $row['size'] ?><br>
                Qty-
           <select class="" style="border-color:#000; font-weight: 500; " name="quantity">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
</select> 
</p>
                <?php
                }
                ?>
    <input type="text" class="d-none" value="<?php echo $row['id'];?>" name="pid">
  <input type="text"  class="d-none" value="<?php echo $restid;?>" name="rid">
  <input type="text"  class="d-none" value="search" name="sendcart">
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
    <?php
    ob_flush();
    ?> 






   