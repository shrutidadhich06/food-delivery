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

<nav class="navbar navbar-expand-sm navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href=")"><b>Food D Home</b></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
</div>
  </nav>

<style>
    h2 {
        text-align:center;
    }
    
    </style>
    <div class="bform">
 <a href="#"> <button class="btn btn-outline-light" type="button"
        data-bs-toggle="modal" data-bs-target="#bsignup">Signup</button></a>
 <a href="#"> <button class="btn btn-outline-light" type="button"
        data-bs-toggle="modal" data-bs-target="#bslogin">Login</button></a>
  </div>


<?php
include 'footer.php';
?>

 <!-- model body start here -->

<div class="modal" id="bsignup">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Business Signup</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form method="post" action="businesssignup.php" ENCTYPE="multipart/form-data">
    <div class="mb-3 mt-3">
    <label for="Restaurant Name">Restaurant Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Restaurant Name" name="RestaurantName">
    </div>
    <div class="mb-3 mt-3">
      <label for="photo">Photo</label>
       <input type="file" class="form-control" id="ph2" placeholder=" uplode photo" name="ph2">
    </div>
    <div class="mb-3 mt-3">
    <label for="add">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
   <div class="mb-3 mt-3">
      <label for="city">City</label>
      <input type="text" class="form-control" id="City" placeholder="Enter City" name="City" value="Bijainagar" readonly>
    </div>
    
    <div class="mb-3">
      <label for="state">State</label>
      <input type="text" class="form-control" id="State" placeholder="Enter State" name="State" value="Rajasthan" readonly>
    </div>
    <div class="mb-3">
      <label for="mobile">Mobile No.</label>
      <input type="text" maxlength="10"class="form-control" id="Mobile No." placeholder="Enter Mobile No." name="MobileNo">
    </div>
    <div class="mb-3">
      <label for="owner">Owner</label>
      <input type="text" class="form-control" id="Owner" placeholder="Enter Owner Name" name="Owner">
    </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="Email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password</label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
</div>

<div class="modal" id="bslogin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Business Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form method="post" form action="businesslogin.php">
    <div class="mb-3 mt-3">
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="username" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password</label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
</div>


        

        <!-- model body ends here -->



