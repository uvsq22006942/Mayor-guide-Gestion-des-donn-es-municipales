<?php


echo '<html>
<link rel="stylesheet" href="style.css"
<body>
<h1>Update info for user</br></br></br></h1>';

$con= mysqli_connect("localhost", "root","", "guide");

?><form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<select name="fn">
<option></option>

<?php $resultat = mysqli_query($con,"SELECT * FROM people");
 while($row = mysqli_fetch_array($resultat)) {

	echo "<option value=". $row['fn'] . "> ". $row['fn']."  | status= ". $row['status'] . "</option></br>";

	}


	
	 echo '<input type="submit" name="submit" value="Update">
	
  </form>';
	
	
	if(isset($_POST['submit'])){
	    echo "<form method=\"post\" action=\"update2.php\">";
		$fn=$_POST['fn'];
	  $con= mysqli_connect("localhost", "root","", "guide");
		$sql="select * from people where fn='$fn' ";
	        $result=mysqli_query($con,$sql);
       while($ro = mysqli_fetch_array($result)) {
	    
	  	  
	        echo "Name :<input name=\"name\" type=\"text\" id=\"fn\" value=\"".$ro['fn']."\" readonly>";
			echo "Status :<input name=\"tatus\" type=\"text\" id=\"status\" value=\"".$ro['status']."\">";
		
	   }
  
          echo "</br></br><input type=\"submit\" value=\"Save\"></form>";


}
?>
</select>  
 <p> <A Href="admin.php"> GO Back</A> 
</body>
</html>