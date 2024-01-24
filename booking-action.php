<?php


include "connect.php";

// collect data

$h_name=$_POST['h_name'];
$name =$_POST['name'];
$phone=$_POST['phone'];
$f_date=$_POST['f_date'];
$t_date=$_POST['t_date'];
$special_req=$_POST['sp-req'];





$sql = "INSERT INTO booking (hotel_name, name,phone,date_from,date_to,special_req) 
VALUES ('$h_name', '$name','$phone','$f_date','$t_date', '$special_req')";

if ($conn->query($sql) === TRUE) {
//   echo"<script> window.location='login.php' </script>";
echo"<script>alert(' booking Successfully!!'); window.location='index.php' </script>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




?>