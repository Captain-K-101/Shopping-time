<?php 
include('header.php');
include('nav.php')
?>
<div>
	<form method="POST" action="reg.php" name="welcome">
		<center>
		<div class="form-group">
		<p>NAME<input type="text" name="name" class="form-text text-muted" value="" autocomplete="off" required= ><br></p>
		<p>usern<input type="text" name="uname" class="form-text text-muted" value="" autocomplete="off" required><br></p>
		<p>pass<input type="Password" name="p1" class="form-text text-muted" value="" autocomplete="off" required><br></p>
		<p>Retype Pass<input type="Password" class="form-text text-muted" name="p2" value="" autocomplete="off" required ><br></p>
		<p><input type="submit" value="Register" class="btn btn-primary btn-lg" name="submit" value="" required><br></p>
	</center>
	</div>
		
	</form>

</div>

<?php include('footer.php')?>