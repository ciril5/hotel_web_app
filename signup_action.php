<?php

include "connect.php";

// collect data

$name =$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];



$sql = "INSERT INTO user (name, email, password)
VALUES ('$name', '$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo"<script> window.location='login.php' </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>