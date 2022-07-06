
<!DOCTYPE html>
<?php
session_start();?>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
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

<body>
<div class="header" >
<h1> Welcom to guide Mayor </h1>
</div>

<nav >
	<ul>
		<li><a href="mayor.php">Home</a></li>
	
		<li><a href="#">Add Document تسجيل وثيقة </a>
			<ul>
				<li><a href="birth.php">Birth ولادة</a></li>
				<li><a href="marriage.php">marriage زواج</a></li>
				<li><a href="death.php">death وفاة</a></li>
				<li><a href="divorce.php">divorce طلاق</a></li>
			</ul>
		</li>
		<li><a href="#">  لوائح الشطب  </a>
			<ul>
				<li><a href="man.php">man ذكور</a></li>
				<li><a href="women.php">women اناث</a></li>
			
			</ul>
		</li>
		<li><a href="logout.php">Logout</a></li>

	</ul>
</nav>


<div id="body">


 <div id="content"> 

   <table align="center">
    
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Mother Name</th>
    <th>Number of Registration</th>
    <th>Birth Date</th>
    <th>Address</th>
    <th>Place of birth</th>
    <th>Gender </th>
    <th>Status</th>
    <th>District</th>
    <th>Governorate</th>

    </tr>
<body>

  <div class="login-wrap">
  <div class="login-html">
    <div class="login-form">
    <form method="post" action="updatemayor.php">
<?php 
    $id = $_GET['id'];
	  $con= mysqli_connect("localhost", "root","", "guide");
		$sql="select * from people where id='$id'";
	        $result=mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result)) {
         $_SESSION['$idd'] =$row['id'];
          $S=$row[10];
		  $nb=$row[5];
        ?> 
      
        <?php
 }
 ?>
      <?php      
           $sql1="select * from people where id='$id' ";
	        $result1=mysqli_query($con,$sql1);
      while($row1 = mysqli_fetch_array($result1)) {
         $_SESSION['$idd'] =$row1['id'];
        ?> 
        <tr>
        <td><?php echo  "<p style='color:red;'>".$row1[1]."</p>"; ?></td>
        <td><?php echo "<p style='color:red;'>".$row1[2]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[3]."</p>"; ?></td>
        <td><?php echo "<p style='color:red;'>".$row1[4]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[5]."</p>"; ?></td>
        <td><?php echo "<p style='color:red;'>".$row1[6]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[7]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[8]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[9]."</p>"; ?></td>
        <td><?php echo "<p style='color:red;'>".$row1[10]."</p>"; ?></td>
        <td><?php echo "<p style='color:red;'>".$row1[11]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[12]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[13]."</p>"; ?></td>
        <td><?php echo  "<p style='color:red;'>".$row1[14]."</p>"; ?></td>

  <td align="center"> 

  <a href="<?php echo "editppl.php?id=$row1[0]" ?>" 
  >edit</a>
  
 
   </td>
   <td align="center"><a href="showfml.php" >Family</a></td>
        </tr>
        <?php $parent=$row1[0];
 }
 ?>
  <?php      
        $sql2="select * from people where mid='$id' ";
       $result2=mysqli_query($con,$sql2);
   while($row2 = mysqli_fetch_array($result2)) {
     ?> 
     <tr>
     <td><?php echo  "<p style='color:pink;'>".$row2[1]."</p>"; ?></td>
     <td><?php echo "<p style='color:pink;'>".$row2[2]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[3]."</p>"; ?></td>
     <td><?php echo "<p style='color:pink;'>".$row2[4]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[5]."</p>"; ?></td>
     <td><?php echo "<p style='color:pink;'>".$row2[6]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[7]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[8]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[9]."</p>"; ?></td>
     <td><?php echo "<p style='color:pink;'>".$row2[10]."</p>"; ?></td>
     <td><?php echo "<p style='color:pink;'>".$row2[11]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[12]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[13]."</p>"; ?></td>
     <td><?php echo  "<p style='color:pink;'>".$row2[14]."</p>"; ?></td>

<td align="center"> 

<a href="<?php echo "editppl.php?id=$row1[0]" ?>" 
>edit</a>


</td>
<td align="center"><a href="showfml.php" >Family</a></td>
     </tr>
     <?php
}
?>

 <?php      
           $sql1="select * from people where fid='$id'&& mid=0 ";
	        $result1=mysqli_query($con,$sql1);
      while($row1 = mysqli_fetch_array($result1)) {
         $_SESSION['$idd'] =$row1['id'];
        ?> 
        <tr>
        <td><?php echo  "<p style='color:blue;'>".$row1[1]."</p>"; ?></td>
        <td><?php echo "<p style='color:blue;'>".$row1[2]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[3]."</p>"; ?></td>
        <td><?php echo "<p style='color:blue;'>".$row1[4]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[5]."</p>"; ?></td>
        <td><?php echo "<p style='color:blue;'>".$row1[6]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[7]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[8]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[9]."</p>"; ?></td>
        <td><?php echo "<p style='color:blue;'>".$row1[10]."</p>"; ?></td>
        <td><?php echo "<p style='color:blue;'>".$row1[11]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[12]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[13]."</p>"; ?></td>
        <td><?php echo  "<p style='color:blue;'>".$row1[14]."</p>"; ?></td>

  <td align="center"> 

  <a href="<?php echo "editppl.php?id=$row1[0]" ?>" 
  >edit</a>
  
 
   </td>
   <td align="center"><a href="showfml.php" >Family</a></td>
        </tr>
        <?php
 }
 ?>
 
 <?php      
           $sql1="select * from people where fid='$id'&& mid<>0 ";
	        $result1=mysqli_query($con,$sql1);
      while($row1 = mysqli_fetch_array($result1)) {
         $_SESSION['$idd'] =$row1['id'];
        ?> 
        <tr>
        <td><?php echo  "<p style='color:yellow;'>".$row1[1]."</p>"; ?></td>
        <td><?php echo "<p style='color:yellow;'>".$row1[2]."</p>"; ?></td>
        <td><?php echo  "<p style='color:yellow;'>".$row1[3]."</p>"; ?></td>
        <td><?php echo "<p style='color:yellow;'>".$row1[4]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[5]."</p>"; ?></td>
        <td><?php echo "<p style='color:black;'>".$row1[6]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[7]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[8]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[9]."</p>"; ?></td>
        <td><?php echo "<p style='color:black;'>".$row1[10]."</p>"; ?></td>
        <td><?php echo "<p style='color:black;'>".$row1[11]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[12]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[13]."</p>"; ?></td>
        <td><?php echo  "<p style='color:black;'>".$row1[14]."</p>"; ?></td>

  <td align="center"> 

  <a href="<?php echo "editppl.php?id=$row1[0]" ?>" 
  >edit</a>
  
 
   </td>
   <td align="center"><a href="showfml.php" >Family</a></td>
        </tr>
        <?php
 }
 ?>

  
</body>

</html>
  
