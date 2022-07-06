<html><header>	<link rel="stylesheet" href="style.css">
</header></html>
<style>

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}
nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
	nav ul:after {
		content: ""; clear: both; display: block;
    
	}
  
nav ul li {
	float: left;
}
	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		nav ul li:hover a {
			color: #fff;
		}
	
	nav ul li a {
		display: block; padding:15px  ; 
		color: #757575; text-decoration: none;
	}

  nav ul ul {
	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute;

}
	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		nav ul ul li a {
			padding: 15px 40px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				background: #4b545f;
			}

nav ul ul ul {
	position: absolute; left: 100%; top:0;
}
.header {

	color: white;
  background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	text-align: center;
	border-radius: 10px 10px 0px 0px;
	padding:20px;
  
}

table
{
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 color:#999;
 margin-bottom:80px;
}
table a
{
 text-decoration:none;
 color:#00a2d1;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:#00a2d1;
 padding:9px 15px 9px 15px;
 color:#f9f9f9;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}

</style>
<?php  
    
echo'
	<html> 
<Head>
	<P> Insert a new person
</Head>	
<body>

<form action="insert.php"
      method="post" accept-charset="utf-8">
  <p> First Name : 		<input type="text" name="fn">
  <p> Middle Name : 		<input type="text" name="mn"> 
  <p> Last Name : 		<input type="text" name="ln">
  <p> Mother Name : 		<input type="text" name="mothername&ln"> 
  <p> number of registration: 		<input type="number" name="nbreg"> 
  <p> Birthday : 		<input type="text" name="bd">
  <p> Address : 		<input type="text" name="address">
  <p> Place of birth : 		<input type="text" name="placebd">
  <p> Gender : 		<input type="text" name="gender">
  <p> status : 		<input type="text" name="status">
  <p> district : 		<input type="text" name="district">
  <p> Governorate : 		<input type="text" name="governorate">
  <p> Parent id : 		<input type="number" name="fid">



  <p> 	<input type="submit" value="add">
</form>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fn = $_POST['fn'];
        $mn = $_POST['mn'];
		$ln = $_POST['ln'];
        $mothername = $_POST['mothername&ln'];
        $nbreg=$_POST['nbreg'];
        $bd=$_POST['bd'];$address=$_POST['address'];$placebd=$_POST['placebd'];$gender=$_POST['gender'];
        $status=$_POST['status'];
        $district=$_POST['district'];
        $governorate=$_POST['governorate'];
        $fid=$_POST['fid'];
        		
		$con=mysqli_connect("localhost","root","","guide");
      //  $query1="INSERT INTO people ('id', 'fn', 'mn', 'ln', 'mothername&ln', 'nbreg', 'bd', 'address', 'placebd', 'gender', 'status', 'district', 'governorate', 'fid') VALUES (NULL, 'mohamed', 'alaa', 'ali', 'alaskda', '65', '22-12-2000', 'tripoli', 'mashha', 'male', 'M', 'akkar', 'akkar', '2')";
		$query="INSERT INTO people VALUES (Null,'$fn','$mn','$ln','$mothername',$nbreg,'$bd','$address','$placebd','$gender','$status','$district','$governorate',$fid)";
       // $query="INSERT INTO people VALUES (Null,'n','mn','ln','mothername',2,'bd','address','000000placebd','gender','status','district','governorate',21)";
		if ( mysqli_query($con,$query) ) //run the query
			echo "the user $fn is succesfuly added";
		else
			echo "the employee $fn alreadye exits";
		mysqli_close($con);
	


	}
?> </body> 
	<a href="logout.php">logout</a>
	<a href="admin.php">BACK</a>
</html>
