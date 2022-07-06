

<?php


    $idmayor = $_GET['id'];

   $del=10;

 include('Connection.php');

  mysqli_query($con,"UPDATE  mayor SET  role='$del' WHERE  id='$idmayor'");
//echo mysqli_connect_errno($con);
mysqli_close($con);
header('location:showallmayor.php');


?>