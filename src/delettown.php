

<?php


$idtown = $_GET['id'];

$del='true';

include('Connection.php');

mysqli_query($con,"UPDATE  town SET  deletee='$del' WHERE  id='$idtown'");
//echo mysqli_connect_errno($con);
mysqli_close($con);
header('location:showtown.php');


?>