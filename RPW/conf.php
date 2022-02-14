<?php
session_start();
error_reporting(0);
define("HOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","my_data");
###### DB INSERTION ######
$con = mysqli_connect(HOST,DBUSER,DBPASS,DBNAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ###############################
?>