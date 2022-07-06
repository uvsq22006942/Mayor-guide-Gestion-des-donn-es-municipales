
<?php
session_start();?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=$_POST['username'];
 $password=$_POST['password'];
 $firstname=$_POST['fn'];
 $lastname=$_POST['lt'];
 $address=$_POST['add'];


 $idmayor=$_SESSION['$idd'];
 

 include('Connection.php');

  mysqli_query($con,"UPDATE  mayor SET  username='$username',password='$password',firstname='$firstname',lastname='$lastname',
address='$address' WHERE  id='$idmayor'");
 // echo mysqli_connect_errno($con);
//mysqli_close($con);
header('location:admin.php');
session_destroy();
}
?>
