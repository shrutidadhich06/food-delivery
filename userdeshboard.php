<?php
session_start();
ob_start();
include 'header.php';
include 'connection.php';

?>
<style>
    .pn {
        text-align: center;
        font-size: 29px;
}
 .slide{
background-color: blanchedalmond;
 }

.carousel-inner{
    height: 256px;
    text-align: -webkit-center;
}
@media screen and (max-width:360px;) {
  .carousel-inner{
    height: 230px;
  }
    }
.carousel-item{
    margin-top: 10px;
    
}
/*.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color:#f1f1f1 ;
  color: black;
}

.round {
  border-radius: 50%;
} */
</style>
<!-- <top content> -->
<!-- <div class="top userop">
    <h2 class="divheading">Inspiration For Your First Order</h2>
    <div class="top-content">
        <div class="img-div">
            <div class="img-div1">
                <div class="img-div2">
                    <div class="img-1" subtype="topCarousel" style="margin-right: 30px;">
                        <a href="">
                            <img width="200" height="200" src="assets/image/burger.jpg" class="imge"></a>
                    </div>
                    <div class="img-1" subtype="topCarousel" style="margin-right: 30px;">
                        <a href="">
                            <img width="200" height="200" src="assets/image/pizza.jpg" class="imge"></a>
                    </div>
                    <div class="img-1" subtype="topCarousel" style="margin-right: 30px;">
                        <a href="">
                            <img width="200" height="200" src="assets/image/garlic.jpg" class="imge"></a>
                    </div>
                    <div class="img-1" subtype="topCarousel" style="margin-right: 30px;">
                        <a href="">
                            <img width="200" height="200" src="assets/image/nm.jpg" class="imge"></a>
                    </div>
                    <div class="img-1" subtype="topCarousel" style="margin-right: 30px;">
                        <a href="">
                            <img width="200" height="200" src="assets/image/cold.jpg" class="imge"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
   

</div> -->

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel"><br>
<h2 class="divheading">Inspiration For Your First Order</h2>
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
    
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  width="200" height="200" src="assets/image/burger.jpg" alt="burger" class="d-block rounded-circle" >
    </div>
    <div class="carousel-item">
      <img  width="200" height="200" src="assets/image/pizza.jpg" alt="pizza" class="d-block rounded-circle" >
    </div>
    <div class="carousel-item">
      <img  width="200" height="200" src="assets/image/garlic.jpg" alt=" garlic" class="d-block rounded-circle" >
    </div>
    <div class="carousel-item">
      <img  width="200" height="200" src="assets/image/nm.jpg" alt="nm" class="d-block rounded-circle" >
    </div>
    <div class="carousel-item">
      <img  width="200" height="200" src="assets/image/cold.jpg" alt=" cold" class="d-block rounded-circle">
    </div>
    <div class="carousel-item">
      <img  width="200" height="200" src="assets/image/Vegetable-Rolls.jpg" alt=" cold" class="d-block rounded-circle">
    </div>
    <div class="carousel-item">
      <img  width="200" height="200" src="assets/image/download.jfif" alt=" cold" class="d-block rounded-circle">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- <top content ends here> -->
<!-- <cards> -->
<div class="row gy-3 my-3 cafecard">
    <?php
$sql="select * from business where status='Active'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))

{
    ?>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
        <div class="card h-100">
            <img src="assets\image\restaurant\<?php echo $row['photo'] ?>" class="card-image" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['restaurantname'] ?></h5>
                <p class="card-text"><?php echo $row['address']." ".$row['city'] ?></p>
                <a href="rest_menu.php?resid=<?php echo $row['id'];?>" class="btn btn-primary">QUICK VIEW</a>
            </div>
        </div>
    </div>
    <?php
}
    ?>
   
    </div>
    
    <?php
include 'footer.php';
ob_flush();
?>
