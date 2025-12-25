<!DOCTYPE html>
<html>

<head>
    <title>food</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/pp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php
//$r="abcdefghijk";
//echo substr_replace($r,"*****",0,7);
//echo "*****####".substr($r,-4);
?>
<div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  box-left">
             <div class="container mt-3">
               <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
    <a class="navbar-brand" href="" style="font-size:30px;"><b>Food D Home</b></a>
  <form class="d-flex">
                   <b><input type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#myModal" value="Login">
                   <input type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1" value="Sign-Up"></b>
                </form>
              </div>
          </nav></div> <br>
     <div class="sb">
     <h5 style="position: absolute;left: 41px; top: 173px;">Order food from favourite restaurants near you.</h5> <br><br>  
<form class="bs" method="POST" action="product.php" >
<input type="text" class="form-control" placeholder="Search anything"  name="search" id="search" >
            <button type="submit" style=" background: orange;" ><i class="fa-solid fa-magnifying-glass" ></i></button>
        </form><br>
        <div class="container anim">

<section class="animation">
  <div class="first"><div>Hungry?</div></div>
  <div class="second"><div>Late night at office? </div></div>
  <div class="third"><div>Game night?</div></div>
</section>
</div>
    </div> 
    
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
              <img src="assets/image/bacc.jpg"  class="fimg">
              </div>
            </div>
<br>


     <div class="feature">
        <div class="row">
       <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
     <img src="assets/image/nmo.jpeg" style="width:254px; height:187px; margin-top:29px;">
     <br><br>
     <h4>No Minimum Order</h4>
     <p style="font-weight:500;">Order in for yourself or for the group, with no restrictions on order value</p>
       </div>
       <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
       <img src="assets/image/lt.jpg" style="width:254px; height:187px; margin-top:29px;">
       <br><br>
       <h4>Live Order Tracking</h4>
     <p style="font-weight:500;">Know where your order is at all times, from the restaurant to your doorstep.</p>
       </div>
       <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12" >
       <img src="assets/image/fd.jpg" style="width:254px; height:187px; margin-top:29px;">
       <br><br>
       <h4>Fast Delivery</h4>
     <p style="font-weight:500;">Experience Swiggy's superfast delivery for food delivered fresh & on time.</p>
</div>
 </div>
</div>
<br>
<div class="row">
    
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
   <p style="font-size:31px; font-weight: 700; text-transform: capitalize; text-align: center; margin: 76px;"> Pickup or delivery from restaurants near you.</p>
   <p style="font-size:larger; text-align:center; margin:36px;"> Explore restaurants that deliver near you, or try yummy takeout fare. With a place for every taste, its easy to find food you crave, and order online .</p>    
</div>

    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <img src="assets/image/bgg.jpg" style="width: 100%; height: 511px; margin-top: -22px; margin-bottom: -46px;"> 
    </div>
</div>

<br><br>
    <?php
include 'footer.php';
?>

    <!-- Model html starts here -->

    <div class="modal" id="myModal">
        <div class="modal-dialog ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" name="frmlogin" action="login.php">
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" name="frmsignup" action="signup.php">
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
            <!-- model body ends here -->
    