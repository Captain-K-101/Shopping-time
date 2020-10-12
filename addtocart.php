




	<?php 
	session_start();
 
	if(isset($_GET['id']) & !empty($_GET['id'])){
		if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){

			$items = $_SESSION['cart'];
			$cartitems = explode(",", $items);

			if ($_GET['id']==6) {
				$items .= "," . $_GET['id'];
				$_SESSION['cart'] = $items;
				header('location: index.php?status=s');
			}
			else if(in_array($_GET['id'], $cartitems)){
				header('location: index.php?status=ic');
			}
			else{
				$items .= "," . $_GET['id'];
				$_SESSION['cart'] = $items;
				header('location: index.php?status=s');
				
			}
 
		}
		else{
			$items = $_GET['id'];
			$quantity=$_POST['quantity'];
			$_SESSION['quantity']=$quantity;
			$_SESSION['cart'] = $items;
			header('location: index.php?status=s');
		}	
	}
	else{
		header('location: index.php?status=failed');
	}
	?>

