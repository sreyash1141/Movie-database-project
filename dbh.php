<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "users";
  $conn=mysqli_connect($servername,$username,$password,$db);
  if(!$conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
?>
