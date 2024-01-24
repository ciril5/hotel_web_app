
<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db1";

// create connection

$conn = new mysqli($servername,$username,$password,$dbname);

// connect check

if ($conn->connect_error){
    die("");
}else{
    echo "";
}

?>