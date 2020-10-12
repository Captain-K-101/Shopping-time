<?php 
session_start();
$servername = "localhost";
 $username = "nik";
 $password = "password";
 $dmname="test";
  //create connection
 $conn = new mysqli($servername, $username, $password,$dmname);
if($db->connect_errror)
 {
  die("Connection errror" .$db->connect_error);
	}

if(isset($_POST['submit']))
{ 
  $e=0;
  $name=$_POST['name'];
  $username=$_POST['uname'];
  $p1=$_POST['p1'];
  $p2=$_POST['p2'];
  
 $query="SELECT * from users where username='$username'";
 $query1="SELECT * from users where name='$name'";

 $ra=mysqli_query($conn,$query1);
 $r1=mysqli_query($conn,$query);
 $data1=mysqli_fetch_array($ra,MYSQLI_NUM);
 $data2=mysqli_fetch_array($r1,MYSQLI_NUM);


 if($data1[0]>=1){

 	$e=1;
 }

  if($data2[0]>=1){
 	$e=1;
 }



 if ($e==0) {
 	if($p1==$p2){
 	$insert="INSERT INTO users(name,username,pass) VALUES('$name','$username','$p1')";
	if (mysqli_query($conn, $insert)) {
		$_SESSION['yaay']=$username;
    	echo "New record created successfully";
    	header("location:index.php");
	} else {
    	echo "Error: " . $insert . "<br>" . mysqli_error($conn);
	}
 	}
 	else{
		echo "Pwrd not matching";
	}
	 
	}
	else{
	   echo "error";
	 }
	
	}
?>
