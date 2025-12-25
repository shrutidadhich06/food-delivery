<?php
include 'connection.php';
include 'headerlink.php';
session_start();
ob_start();
$busid=$_SESSION['busid'];
$idor1=$_POST['idor'];
$uid=$_SESSION['uid'];
        $sql1="SELECT * FROM orderdetail where 	orderid=$idor1 AND restaurantid=$busid";
        $res1=mysqli_query($conn,$sql1);

        $sql3="SELECT * FROM userinfo where id=$uid";
        $res3=mysqli_query($conn,$sql3);

$row3=mysqli_fetch_array($res3);
        ?>
        <h5 align="center"><b>User Information :-</b></h5 >
        <div><b class='title'>Name=</b><?php echo ucfirst( $row3['name'] ); ?>
        <b class='title'> Address=</b><?php echo ucfirst($row3['address']) ; ?>
         <b class='title'>Phone no.=</b><?php echo ucfirst( $row3['mobile'] ); ?>
    </div>
<?php

 

while($row1=mysqli_fetch_array($res1))
                      {
                        $pid=$row1['productid'];
                        
    $sql2="select * from product where id=$pid";

    $res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);




                         
    ?>
    <style>
  .title
  {
    text-transform: capitalize;
  }


    </style>
 




    <h5 align="center"><b>Product Information :-</b></h5 >
    <p ><b class='title'>Name=</b><?php echo ucfirst( $row2['productname']) ; ?>
                      </p>
 <p><b class='title'> rate=</b><?php echo ucfirst( $row1['rate'] ); ?>
                      </p>
<p><b class='title'>quantity=</b><?php echo ucfirst( $row1['qty'] ); ?>
                      </p>


<?php
   }


   ob_flush();
?>