<?php
session_start();
include 'header2.php';
include 'connection.php';
$bid=$_SESSION['busid'];

$sql="select * from product where restaurantid=$bid";
$res=mysqli_query($conn,$sql);
$ro=mysqli_num_rows($res);
?>
    <style>
         table, td, th {  
  border: 4px solid black;
  text-align: center;
  margin-top: 3px;
}
tr {
    border-color: #000!important;
    border-style: solid!important;
    border-width: 3!important;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 6px;
  border-width: 3!important; 
} 
img{
    width:80px;
    height:50px;
    float:right;
}
button{
    color: black;
    background: green;
    font-weight: 700;
    font-size: larger;
    margin: 0px;
    padding: 2px;
    width: 80px;
}

</style>
 <table>
 <thead>
    <tr>
      <th scope="col">Product id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Rate</th>
           
      <th scope="col">Weight</th>
      <th scope="col">Measurement</th>
      <th scope="col">Size</th>
      <th scope="col">Description</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>

   
<?php
while($row=mysqli_fetch_array($res))
{
    ?>
    <?php
echo"
<tr>
<td>". $row['id']. "</td>
<td>". $row['productname']. "  <img src='assets/image/product/".$row['photo']." '></td>
<td>".$row['rate']."</td>

<td>".$row['weight']."</td>
<td>".$row['measurement']."</td>
<td>".$row['size']."</td>
<td>".$row['description']."</td>
<td>
<a href='updateproduct.php?pid=".$row['id']."&pn=". $row['productname']."&pr=".$row['rate']."&pw=".$row['weight']."&pm=".$row['measurement']."&ps=".$row['size']."&pd=".$row['description']."&ph=".$row['photo']."' data-toggle='tooltip' data-placement='top' title='Edit'> <i class='fa-solid fa-pen-to-square' style='color:  #272727;'data-bs-toggle='modal' data-bs-target='#glogin'></i></a>

<a href='deleteproduct.php?pid=".$row['id']."' data-toggle='tooltip' data-placement='top' title='Delete'>
<i class='fa-sharp fa-solid fa-trash' style='color: #272727;margin-left:8px;'></i></a>
</td>
</tr>";


?>

<?php
}
?>
</table>
<?php
include 'footer.php';
?>


