<?php 
session_destroy();
session_start();
require_once('connect.php');
include('header.php');
include('nav.php');
$sql = "SELECT * FROM products ";
$res = mysqli_query($conn, $sql);
if(!empty($_SESSION['yaay'])){
?>
 
<h1><?php   echo "welcome  ";
  echo $_SESSION['yaay']; ?></h1> 
  <div class="butting">
  <p><a href="logout.php" class="btn btn-outline-primary" >logout</a></p>
  </div>
  <div class="myass" >
<?php while($r = mysqli_fetch_assoc($res)){ ?>
    <div class="">
      <div class="">
        <img src="<?php echo $r['image']; ?>" >
        
        <div class="">
          <h3  class="text-justify"><?php echo $r['title'] ?></h3>
          <p  class="text-justify" ><?php echo $r['description'] ?></p>
          <p  class="text-justify" ><?php echo $r['price'] ?>$</p>
          <p  class="btn btn-outline-primary"><a href="addtocart.php?id=<?php echo $r['id']; ?>" role="button">Add to Cart</a></p>    
          <br>
          <br>
          <br>
          <br>
        </div>
     <p>----------------------------------------------------------------------------------------------------------------</p>
      </div>
    </div>
    <?php }} else { } ?>

<!---   THE CODE FOR THE CART IS HERE --->
<div class="myass">
<h1><b> WELCOME TO YOUR CART  </b></h1>

<?php 
$items = $_SESSION['cart'];
$quantity=$_SESSION['quantity'];
$cartitems = explode(",", $items);
?>
  
    <table >
      <tr>
        <th>S.NO</th>
        <th>Item Name</th>
        <th>Price</th>
        <th> </th>
      </tr>
      
    <?php
    $total = '';
    $i=0;
     foreach ($cartitems as $key=>$id) {
      $sql = "SELECT * FROM products WHERE id = $id";
      $res=mysqli_query($conn, $sql);
      $r = mysqli_fetch_assoc($res);
      if($i!=0){
    ?>      
      <tr>
        <td><?php echo $i; ?></td>
        <td> <?php echo $r['title'];?></td>
        <td>$<?php echo $r['price']; ?></td> 
        <td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a></td>
      </tr>
   
    <?php 
      $total = $total + $r['price'];
      $i++; 
      } 
      else
      { $i++;
      }
    }
    ?>
    <tr>
      <td><strong>Total Price</strong></td>
      <td><strong>$<?php echo $total; ?></strong></td>
      <td><a href="no-made.php" class="btn btn-success">Checkout</a></td>
    </tr>
    </table>
   </div>
<?php include('footer.php'); ?>