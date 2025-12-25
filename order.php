<?php
session_start();
ob_start();
include 'connection.php';
include 'headerlink.php';
$busid=$_SESSION['busid'];

?>


 <style>

.container{
    display:table;
    width:90%;
    border-collapse: collapse;
    }
 
.heading{
     font-weight: bold;
     display:table-row;
     background-color:#C91622;
     text-align: center;
     line-height: 47px;
     font-size: 14px;
     font-family:georgia;
     color:#fff;
     
 }
 .table-row{  
     display:table-row;
     text-align: center;
     line-height: 39px;
 }
 .col{ 
    display:table-cell;
     border: 1px solid #CCC;
 }
/* .modal-content{
    overflow: scroll;
    height: 500px;
    width: 521px;

} */
</style>
<script>
         $(document).ready(function() {
            $(".orddetail").click(function(){
                var idorn=$(this).val();
                $.ajax({
        type: 'POST',
        url: 'orderdetails.php',
        data: {idor: idorn},
        success: function(response) {
            $('#sh').html(response);
        }
    });


                          });
        });

        </script>

  <div class="container">
  <div class="heading"  >
         <div class="col">Order ID</div>
         <div class="col">Order date and time</div>
         <div class="col">Show more</div>
               
        </div>
<?php
$sql="select * from orderdetail where restaurantid=$busid group by orderid";

$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
    $oid=$row['orderid'];
    $sql1="select * from prorder where id=$oid";

    $res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);
$uid=$row1['user_id'];
$_SESSION['uid']=$uid;

echo "<div class='table-row'>
<div class='col'>". $row['orderid']."</div>
<div class='col'>".$row1['dnt']."</div>
<div class='col'><button class='orddetail' value=". $row['orderid']. " style='background:none; border:none;font-size:x-large;'><i class='fa-solid fa-circle-arrow-right' data-bs-toggle='modal' data-bs-target='#modaldetail'></i></button></div>



</div>";
?>
  
<?php
}
?>
  </div>
<!-- Modal -->
<div class="modal fade" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </button>
      </div>
      
      <div class="modal-body">
      <div id="sh"></div>
     
 
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div><?php
ob_flush();
?>
