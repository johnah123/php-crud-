<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'polloso';

$connection = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()){
  echo "Error imong gibuhat bugok <br> ";
  echo "Message: " .mysql_connect_error(). "<br>" ;
}
?>