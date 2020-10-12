<?php 
include('header.php');
include('nav.php');
?>
<div>
	<form method="POST" action="l.php" >
		<div class="form-group">
	<p>USERNAME<input type="text" class="form-text text-muted" name="username"  autocomplete="off" required><br></p>
	<p>Password<input type="text" class="form-text text-muted" name="Password"  autocomplete="off" required><br></p>
	<p><input type="submit" value="login" name="se" class="btn btn-primary" value="" required><br></p>

</div>

	</form>

<? include('footer.php');