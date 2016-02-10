<?php


$host = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASS');
$database = getenv('MYSQL_DB');

$conn = new mysqli($host, $username, $pass, $database);

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
  

}
 
  /*
$host = 'localhost';
$username = 'root';
$pass = 'root';
$database = 'HackU';

$conn = new mysqli($host, $username, $pass, $database);

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
  
 
}*/