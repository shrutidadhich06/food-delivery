<?php
session_start();
?>
<?php
include 'header2.php';
?>

<div class="bdashboard">
<button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#glogin">Get Product</button>
</div>

<?php
include 'footer.php';
?>
<div class="modal" id="glogin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Enter Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form method="post" form action="getproduct.php" ENCTYPE="multipart/form-data">
    <div class="mb-3 mt-3">
    <div class="mb-3">
      <label for="product name">Product Name</label>
      <input type="text" class="form-control" id="username" placeholder="Enter product name" name="productname">
    </div>
    <div class="mb-3">
      <label for="rate">Rate</label>
       <input type="text" class="form-control" id="rate" placeholder="Enter rate" name="rate">
    </div>
    
    <div class="mb-3">
      <label for="weight">Weight</label>
       <input type="text" class="form-control" id="weight" placeholder="Enter weight" name="weight">
    </div>
    <div class="mb-3">
      <label for="weight">Measurement</label>
       <!-- <input type="text" class="form-control" id="measurement" placeholder="Enter Measurement" name="measurement"> -->
      <select class="form-select"  id="measurement" name="measurement"placeholder="Enter Measurement" >
      <option value=""> </option>
      <option value="" disabled selected hidden>Enter Measurement</option>
      <option>Quantity</option>
      <option>kilo</option>
      </select>
  
  
    </div>
    <div class="mb-3">
      <label for="size">Size</label>
       <input type="text" class="form-control" id="size" placeholder="Enter size" name="size">
    </div>
    <div class="mb-3">
      <label for="photo">Photo</label>
       <input type="file" class="form-control" id="ph1" placeholder=" uplode photo" name="ph1">
    </div>
    <div class="mb-3">
      <label for="description">Description</label>
       <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
</div>
