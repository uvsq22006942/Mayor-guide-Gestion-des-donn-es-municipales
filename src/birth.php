<?php
session_start();?>
<style>
body{
  margin:0;
  color:#6a6f8c;
  background: #6a6f8c ; 
	
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:525px;
  min-height:570px;
  position:relative;
  background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
}
.login-form .group{
  margin-bottom:15px;
}

.login-form .group .label,
.login-form .group .input,
.login-form .group .button
.login-form .group .option{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button
.login-form .group .option{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input .[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1161ee;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;
}
<html lang="en" >
body{
  margin:0;
  color:#6a6f8c;
  background:#c8c8c8;
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:600px;
  min-height:800px;
  position:relative;
  background:url(http://codinginfinite.com/demo/images/bg.jpg)  center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
select{
	margin-top: 20px;
  margin-bottom: 20px;
  margin-right: 20px;
  margin-left: 20px;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button
{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1161ee;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;
}
</style>

<body>
  <div class="login-wrap">
  
  <div class="login-html">
  <a style='color:black;' href="mayor.php">Back</a>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Add birth document ?????????? ??????????</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">
    <form method="post" action="birth.php">
    
        <div class="group">
          <label for="father" class="label">father name    ?????? ????????????</label>
          <input id="father" name="father" type="text" class="input" >
        </div>
        <div class="group">
          <label for="bdfather" class="label">Date of birth of the father ?????????? ?????????? ???????? </label>
          <input id="bdfather" name="bdfather" type="date" class="input" >
        </div>
        <div class="group">
          <label for="mother" class="label">mother name ?????? ????????</label>
          <input id="mother" name="mother" type="text" class="input" >
        </div>
        <div class="group">
          <label for="bdmother" class="label">Date of birthof the mother ?????????? ?????????? ???????? </label>
          <input id="bdmother" name="bdmother" type="date" class="input" >
        </div>
        <div class="group">
          <label for="newborn" class="label">Name of the newborn ?????? ??????????????</label>
          <input id="newborn" name="newborn" type="text" class="input" >
        </div>
        <div class="group">
          <label for="bd" class="label">Date of birth ?????????? ?????????????? </label>
          <input id="bd" name="bd" type="date" class="input" >
        </div>
        <div class="group">
          <label for="Registration" class="label">Number of Registration ?????? ??????????</label>
          <input id="nbreg" name="nbreg" type="number" class="input" >
        </div>
       
    
        <div class="group" >
          <label for="placeb" class="label">Place of birth ???????? ??????????????</label>
          <input id="placeb" name="placeb" type="text" class="input" >
        </div>
    
     <div class="group">
          <input type="submit" class="button" value="Save ??????????" name="login">
        </div>

      
      </form>
      
  </div>
  
  
  
</body>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id=0;
	    	$father = $_POST['father'];
        $bdfather = $_POST['bdfather'];
        $mother = $_POST['mother'];
        $bdmother = $_POST['bdmother'];
        $newborn = $_POST['newborn'];
        $bd = $_POST['bd'];
        $nbreg = $_POST['nbreg'];
        $placeb = $_POST['placeb'];
        $idmay=  $_SESSION['mayorid'];
        $conn= mysqli_connect("localhost", "root","", "guide");
        $sql_query="SELECT * FROM mayor where id='$idmay' ";
        $result=mysqli_query($conn,$sql_query);
        while($ro = mysqli_fetch_array($result)) {
          
          $fname=$ro['firstname'];
          $lastname=$ro['lastname'];
          
          $address=$ro['idtown'];
          
        }

      $name=$fname." ".$lastname;

      $date=date("Y-m-d");
      $deletee='false';

		if (!empty( $name) && !empty( $mother) && !empty( $newborn)&& !empty( $bd) && !empty( $nbreg)){
		$con=mysqli_connect("localhost","root","","guide");

		$query="INSERT INTO birth VALUES ($id,'$father','$bdfather','$mother','$bdmother','$newborn'
    ,'$bd','$nbreg','$placeb','$name','$address',' $date','$deletee')";

		if ( mysqli_query($con,$query) ) //run the query
			echo "the town '$newborn' is succesfuly added";
			
		else
			echo "the town '$newborn' alreadye exits";
		mysqli_close($con);
	

}
else{
	echo "any input is empty";
}
}
?>
</html>
