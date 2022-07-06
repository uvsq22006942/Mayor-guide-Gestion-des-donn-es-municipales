

<?php
session_start();
if (isset($_POST['login'])) {
	if (empty($_POST['user']) || empty($_POST['pass'])) 
		echo "Username or Password is empty";
	else{
		$username=$_POST['user'];
		$password=$_POST['pass'];	
		
		$con= mysqli_connect("localhost", "root","", "guide");
		$sql="select * from adminn where password='$password' 
				 AND username='$username'";
		 $sqll="select * from mayor where password='$password' 
				 AND username='$username'";
		$result=mysqli_query($con,$sql);
		$nbrow=mysqli_num_rows($result);
		$resultt=mysqli_query($con,$sqll);
		$nbrowss=mysqli_num_rows($resultt);
		if ($nbrow == 1 || $nbrowss==1 ) {
		$_SESSION['login_user']=$username; // Set the Session
			$res = mysqli_fetch_array($result);
			$ress = mysqli_fetch_array($resultt);
			if(!empty($_POST["remember"])){	
			
			setcookie("member_login",$_POST["user"],time()+(10 * 365 * 24 * 60 *60));
			setcookie("password",$_POST["pass"],time()+(10 * 365 * 24 * 60 *60));
			    if ($res['role'] ==1){	    				
				    $_SESSION['mayor']= $username;//assign a role
				    header("location: officer.php"); // Redirecting To Other Page
				}
                else if($ress['role'] ==2 ) {
				    $_SESSION['mayor']= $username;//assign a role
				    header("location: mayor.php"); // Redirecting To Other Page
			}
			else if($ress['role'] ==0 ) {
				$_SESSION['mayor']= $username;//assign a role
				header("location: admin.php"); // Redirecting To Other Page
		} 
		   
			   
		}
		else{
		    if(isset($_COOKIE["member_login"]))   
    {  
     setcookie ("member_login","");  
    }  
            if(isset($_COOKIE["password"]))   
    {  
     setcookie ("password","");  
    }  
	if ($res['role'] ==1){	    				
				    $_SESSION['admin']= $username;//assign a role
				    header("location: officer.php"); // Redirecting To Other Page
				}
                else if($ress['role'] ==2 ) {
				    $_SESSION['mayor']= $username;//assign a role
				    header("location: mayor.php"); // Redirecting To Other Page
			} 
			else if($ress['role'] ==0 ) {
				$_SESSION['mayor']= $username;//assign a role
				header("location: admin.php"); // Redirecting To Other Page
		}    
		 }
		}
		else {
			echo "Username or Password is invalid";
			
		}
	
		
		
		mysqli_close($con); // Closing Connection
	}
}
?>