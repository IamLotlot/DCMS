<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dcms";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
  echo '<script type="text/javascript">'; 
  echo 'alert("Localhost Connection Failed");';
  echo '</script>';
  exit();
}