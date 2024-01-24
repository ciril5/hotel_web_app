<?php
include "connect.php";

// collect data

$name=$_POST['name'];
$email =$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city_name'];







$sql = "INSERT INTO letter  (id,name,email,phone,city) 
VALUES ('','$name', '$email',$phone,'$city')";

if ($conn->query($sql) === TRUE) {
//   echo"<script> window.location='login.php' </script>";
echo"<script>alert('request is submitted!!'); window.location='index.php' </script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>