<?php
include 'connection.php';
include 'headerlink.php';
$pid=$_GET['pid'];
$pn=$_GET['pn'];
$pr=$_GET['pr'];
$pw=$_GET['pw'];
$ps=$_GET['ps'];
$pd=$_GET['pd'];
$ph=$_GET['ph'];
$pm=$_GET['pm'];
?>

<style>
   body{
    background-color: black;
   }
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #1520a6;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #fff;
}

.container {
  border-radius: 5px;
  background-color: cadetblue;
  padding: 20px;
  margin-top: 50px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-weight:bold;
  font-size:20px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;

}
.btn{
font-weight:bolder;
font-size:14px;
}
 .proid{
        color: black;
    font-size: large;
    font-weight: bolder;
    text-decoration: underline;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.card{
    width: 138px;
    /* height: 12px; */
    /* float: right; */
}



@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.proid1{
    visibility: hidden;
    width: 0px;
    height: 0px;
}

</style>

<body>


<div class="container">
  <form method="POST" action="updateproductsubmit.php" ENCTYPE="multipart/form-data">
  <div class="card h-100">
  <img src="assets/image/product/<?php echo "$ph"?>" class="" alt="...">
 </div>
  
 <div>
     <label for="product id" class="proid">Product id - <?php echo "$pid"?></label>
        <input type="text" id="pid" class="proid1"  name="pid" value="<?php echo "$pid"?>">
     <label for="product name" class="proid">Product Name - <?php echo "$pn"?> </label>
      </div>
    <div class="row">
      <div class="col-25">
        <label for="rate">Rate</label>
      </div>
      <div class="col-75">
      <input type="text" class="form-control" id="rate" placeholder="Enter rate" name="rate"value="<?php echo "$pr"?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Weight</label>
      </div>
      <div class="col-75">
      <input type="text" class="form-control" id="weight" placeholder="Enter weight" name="weight" value="<?php echo "$pw"?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="measurement">Measurement</label>
      </div>
      <div class="col-75">
      <input type="text" class="form-control" id="measurement" placeholder="Enter measurement" name="measurement"value="<?php echo "$pm"?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Size</label>
      </div>
      <div class="col-75">
      <input type="text" class="form-control" id="size" placeholder="Enter size" name="size" value="<?php echo "$ps"?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Description</label>
      </div>
      <div class="col-75">
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description"value="<?php echo "$pd"?>">
     </div>
     <br><br><br>
      <div class="col-50" >
      <input type="submit" class="btn btn-primary" value="Update" name="submit">
     </div>
     </form>
</div>
</body>
</head>
</html>
