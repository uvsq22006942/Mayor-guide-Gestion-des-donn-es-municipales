
<?php

include 'connection.php';
$fn=$_POST['fn'];
 $status=$_POST['status'];

if(  mysqli_query($con,"update  people set fn='$fn',status='$status' where fn='$fn'")){
echo "worl";
}
else echo "noo";
   mysqli_connect_errno($con);
mysqli_close($con);

?>
</body>
</html>