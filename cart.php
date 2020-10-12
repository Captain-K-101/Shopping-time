<?php 

session_start();
session_destroy();

require_once('connect.php');
include('header.php');
include('nav.php');
 
$sql = "SELECT * FROM products ";
$res = mysqli_query($conn, $sql);
?>


<?php
//Make sure that the session variable actually exists!
if(isset($_SESSION['cart'])){
    //Loop through it like any other array.
    foreach($_SESSION['cart'] as $productId){
        //Print out the product ID.
        echo $productId, '<br>';
    }
}



?>

 <table style="width:30%">
  <tr>
    <th>no</th>
    <th>Product</th>
    <th>Price</th>
  </tr>
  <tr >
    <td>1</td>
    <td>COOL STUFF</td>
    <td>500</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Just another produc</td>
    <td>940</td>
  </tr>
</table> 

<?php include('footer.php'); ?>