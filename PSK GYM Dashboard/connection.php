<?php
$servername="localhost";
$username="root";
$password="";
$databasename="pskdash";
$con=mysqli_connect($servername,$username,$password,$databasename);

if(!$con)
{
  die("connection failed".mysqli_connect_error());
}
ob_start();
//DB Connection
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','gymdb');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>