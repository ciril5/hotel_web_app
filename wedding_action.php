<?php


include "connect.php";

// collect data

$f_name=$_POST['f_name'];
$email =$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city_name'];
$req=$_POST['w_req'];






$sql = "INSERT INTO wedding  (name,email,phone_number,city,enquiry) 
VALUES ('$f_name', '$email','$phone','$city', '$req')";

if ($conn->query($sql) === TRUE) {
//   echo"<script> window.location='login.php' </script>";
echo"<script>alert('enquiry is submitted!!'); window.location='index.php' </script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>