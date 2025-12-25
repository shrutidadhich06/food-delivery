<?php
include 'headerlink.php';
include 'connection.php';
ob_start();
session_start();
$userid=$_SESSION['userid'];
$sql="select * from userinfo where id='$userid'";
$res=mysqli_query($conn,$sql);
$ro=mysqli_num_rows($res);
?>
<style>
    
    h2{
        font-weight:600;
        text-align: center;
    font-family: auto;
    }
    .form-control{
        height: 70px;
        font-weight: 600;
    font-size: 20px;
    color: #93959f;
    letter-spacing: 1px;
    border-style: outset;
    border-block-color: grey;
    width: 600px;
  
}
.form-group{
  display: flex;
  justify-content: center;
}
.bodym{
  text-align: center;
}

  
.btnn {
  background-color: #13aa52;
  border: 1px solid #13aa52;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  padding: 10px 25px;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.btnn:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .btnn {
    padding: 10px 30px;
  }
}

    </style>
    <script>
         $(document).ready(function() {
            $("#cod1").click(function(){
              $("#sub").show();
              $("#ptp").hide();
            });
            $("#op").click(function(){
              $("#ptp").show();
              $("#sub").hide();
            });
        });

        </script>

<nav class="navbar navbar-expand-sm navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><b>Food D Home</b></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
</div>
  </nav><br>
 
  <div class="bodym">
  
  <h2>Information</h2><br>
  <?php
  while($row=mysqli_fetch_array($res))
  {
  
  ?>
  <form method="POST" action="updatelogin.php" ENCTYPE="multipart/form-data">
  		 <div class="form-group">
       <input type="text" class="form-control" value="<?php echo $row['address'] ?>" id="address" placeholder="Delivery address" name="address">
    </div><br>
    <div class="form-group">
    <input type="text" class="form-control" value="<?php echo $row['city'] ?>" id="city" placeholder=" City" name="city">
    </div><br>
   <div class="form-group">
      <input type="text" class="form-control" value="<?php echo $row['pincode'] ?>" id="pincode" placeholder=" Pincode" name="pincode" maxlength="6">
</div><br>
<div style="font-size:large; font-weight:500;">
<label><input type="radio" name="rbtn" value="cod" id="cod1">&nbsp;COD</label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<label> <input type="radio"  name="rbtn" value="onlinep" id="op">&nbsp;Online Payment</label></div>
<br>
<!-- <button id="myButton" class="btnn">Button</button> -->
 <br>    <button type="submit" class="btnn" id="ptp" name="submit" style="display:none;">Proceed to pay</button>
<button type="submit" class="btnn" name="submit" id="sub" style="display:none;">Submit</button>
</form>
  <?php
  }
  
?>

  </div>
  
