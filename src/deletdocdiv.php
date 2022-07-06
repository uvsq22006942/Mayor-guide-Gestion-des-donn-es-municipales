

<?php


$documentid = $_GET['id'];

$del='true';

include('Connection.php');

mysqli_query($con,"UPDATE  divorce SET  deletee='$del' WHERE  id='$documentid'");
//echo mysqli_connect_errno($con);
mysqli_close($con);
header('location:odivorce.php');


?>