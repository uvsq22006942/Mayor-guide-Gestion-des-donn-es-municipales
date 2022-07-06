

<?php


$idadmin = $_GET['id'];

$del=9;

include('Connection.php');

mysqli_query($con,"UPDATE  adminn SET  role='$del' WHERE  id='$idadmin'");
//echo mysqli_connect_errno($con);
mysqli_close($con);
header('location:admin.php');


?>