
<?php
session_start();?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name=$_POST['name'];
 $gov=$_POST['gov'];
 $disc=$_POST['disc'];
 

 $idtown=$_SESSION['$idd'];
 

 include('Connection.php');

  mysqli_query($con,"UPDATE  town SET  name='$name',governorate='$gov',district='$disc' WHERE  id='$idtown'");
 // echo mysqli_connect_errno($con);
//mysqli_close($con);
header('location:showtown.php');
session_destroy();
}
?>
