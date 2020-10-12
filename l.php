<?php 
session_start();
$servername = "localhost";
 $username = "nik";
 $password = "password";
 $dmname="test";
  //create connection
 $conn = new mysqli($servername, $username, $password,$dmname);
  //Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

if(isset($_POST['se'])){
 $user=$_POST['username'];
 $pass=$_POST['Password'];

$query = "SELECT username FROM users WHERE username= '$user' AND pass='$pass'";

$r=mysqli_query($conn,$query);
$s=mysqli_fetch_array($r);
  if ($s['username']!=$user  && $s['pass']!=$pass)
    {
        echo "THE USERNAME AND PASSWORD ARE INCORRECT";
    }
else {
		$_SESSION['yaay']=$user;

        header("location:index.php");



     }



}




?>