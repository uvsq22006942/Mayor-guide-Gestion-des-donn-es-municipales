$query="UPDATE mayor SET id='$idmayor',username='$username',password='$password',firstname='$firstname',lastname='$lastname',
  address='$address',idtown='$idtown',role='$role',delete='$delete' WHERE username '$username'";
  if (mysqli_query($con,$query) ){
     echo "the user '$id' is succesfuly edit";} //run the query
 
  
else{ echo "the user '$delete' not edit";}
 
}
else{
	echo "imput is empty";
}

<nav >
	<ul>
		<li><a href="admin.php">Home</a></li>
		<li><a href="showallmayor.php">Mayor</a>
			
		</li>
		<li><a href="showtown.php">Town</a>
			
		</li>
		<li><a href="#">People</a>
		<ul>
				<li><a href="#">Photoshop</a></li>
				<li><a href="#">Illustrator</a></li>
				<li><a href="#">Web Design</a>
					<ul>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
					</ul>
				</li>
			</ul>
	</ul></li>
	
</nav>