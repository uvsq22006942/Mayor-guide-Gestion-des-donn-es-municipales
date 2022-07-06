<?php
$con=mysqli_connect("localhost","root","","guide");
//For Arabic language
mysqli_query($con, 'SET NAMES "utf16" COLLATE "utf16_general_ci"' );
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>