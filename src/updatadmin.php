
<?php
session_start();?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=$_POST['username'];
 $password=$_POST['password'];
 $firstname=$_POST['fn'];
 $lastname=$_POST['lt'];
 $idtown=$_POST['idtown'];

 $idadmin=$_SESSION['$idd'];
 

 include('Connection.php');

  mysqli_query($con,"UPDATE  adminn SET  username='$username',password='$password',firstname='$firstname',lastname='$lastname',
idtown='$idtown' WHERE  id='$idadmin'");
 // echo mysqli_connect_errno($con);
//mysqli_close($con);
header('location:admin.php');
session_destroy();
}
?>
