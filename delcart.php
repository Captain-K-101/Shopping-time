
<?php
session_start();
$items=$_SESSION['cart'];
$cart=explode(",",$items);
if (isset($_GET['remove']) & !empty($_GET['remove'])) {
	$r=$_GET['remove'];
	if($r==0){
	}
	else{
	unset($cart[$r]);
	$itn=implode(",", $cart);
	$_SESSION['cart']=$itn;
}
	
}
header("location: index.php")

?>