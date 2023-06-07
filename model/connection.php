<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bincom_test";

$con = mysqli_connect($hostname, $username, $password, $dbname);

  if(!$con){
      echo "Failed to connect";
  }
?>