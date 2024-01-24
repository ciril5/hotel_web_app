<?php

session_start();
include("connect.php");

$name=$_POST['name'];
$password=$_POST['pass'];

$sql=mysqli_query($conn,"select * from user where name='$name' and password='$password'");
$result=mysqli_fetch_array($sql);

if ($result>0){
    $_SESSION['name']=$result['password'];
    echo"<script> window.location='index.php' </script>";
}else{
    echo"<script> window.location='signup.php' </script>";
}
 





?>


















?>