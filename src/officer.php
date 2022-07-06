
<!DOCTYPE html>

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
<script>
function showHint(str)
{
	if (str.length==0)	{ 
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","ajaxmayor.php?q="+str,true);
	xmlhttp.send();
}

</script>
<body>
<div class="header" >
<h1> Welcom to guide Mayor </h1>
</div>


<nav >
	<ul>
		<li><a href="officer.php">Home</a></li>
		<li><a href="ppltown.php">Show all people</a>
		<li><a href="chat.php">Chat</a></li>
		</li>
		<li><a href="#">Document   </a>
			<ul>
				<li><a href="obirth.php">Birth ولادة</a></li>
				<li><a href="omarriage.php">marriage زواج</a></li>
				<li><a href="odeath.php">death وفاة</a></li>
				<li><a href="odivorce.php">divorce طلاق</a></li>
			</ul>
		</li>
		
		<li><a href="logout.php">Logout</a></li>
	</ul>
</nav>

<center>

<div id="body">

<form> 
Search: <input type="text" onkeyup="showHint(this.value)">
</form>
<pSuggestions: <div id="txtHint"></div></p>
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="addmayoff.php">add mayor</a></th>
    </tr>
    <th>username</th>
    <th>password</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Town</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php

	$con= mysqli_connect("localhost", "root","", "guide");
 $sql_query="SELECT * FROM mayor";
 $result=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result))
 {
  ?> 
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>

  <td align="center"> 

  <a href="<?php echo "editmayoroff.php?id=$row[0]" ?>" 
  >edit</a>
  
 
   </td>
   <td align="center"><a href="<?php echo "deletmayor.php?id=$row[0]" ?>" >Delete</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>

</body>
</html>

