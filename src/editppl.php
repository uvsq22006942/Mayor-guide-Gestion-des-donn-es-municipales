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
.login-form .group .button{
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
.login-form .group .button{
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
  <div class="group" align="right" >
  <a style='color:black;' href="<?php $idton= $_SESSION['townenter']; echo "showppl.php?id=$idton" ?>">Back </a> 
  </div>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Edit Mayor</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">
    <form method="post" >
<?php 
    $id = $_GET['id'];
	  $con= mysqli_connect("localhost", "root","", "guide");
		$sql="select * from people where id='$id' ";
	        $result=mysqli_query($con,$sql);
      while($ro = mysqli_fetch_array($result)) {
          $fn=$ro['fn'];
         $mn=$ro['mn'];
         $ln=$ro['ln'];
         $mothername=$ro['mothername'];
         $nbreg=$ro['nbreg'];
         $bd=$ro['bd'];
         $add=$ro['address'];
         $placeb=$ro['placeb'];
         $gender=$ro['gender'];
         $status=$ro['status'];
         $religion=$ro['religion'];
         $denomination=$ro['denomination'];
         $district=$ro['district'];
         $governorate=$ro['governorate'];
         $fid=$ro['fid'];
         $mid=$ro['mid'];
         $townid=$ro['townid'];

  
         
                 //    $_SESSION['$idd'] =$ro['id'];

		
	  }


?>
  <div class="group">
          <label for="fn" class="label">First name</label>
          <input id="fn" name="fn" type="text" class="input"  value=<?php echo $fn;?>>
        </div>
		
        <div class="group">
          <label for="mn" class="label">Middle Name</label>
          <input id="mn" name="mn" type="text" class="input" value=<?php echo $mn;?> >
        </div>
        <div class="group">
          <label for="ln" class="label">Last Name</label>
          <input id="ln" name="ln"type="text" class="input" value=<?php echo $ln;?> >
        </div>
        <div class="group">
          <label for="mothername" class="label">Mother Name</label>
          <input id="mothername" name="mothername"type="text" class="input" value=<?php echo $mothername;?> >
        </div> <div class="group" background=>
          <label for="nbreg" class="label">Number of registration </label>
          <input id="nbreg" name="nbreg" type="number" class="input" value=<?php echo $nbreg;?> >
        </div> <div class="group" background=>
          <label for="bd" class="label">Birth Date</label>
          <input id="bd" name="bd" type="date" class="input" value=<?php echo $bd;?> >
        </div>
        <div class="group" background=>
          <label for="add" class="label">Address </label>
          <input id="add" name="add" type="text" class="input" value=<?php echo $add;?> >
        </div>
		<div class="group" background=>
          <label for="placeb" class="label">Place of birth </label>
          <input id="placeb" name="placeb" type="text" class="input" value=<?php echo $placeb;?> >
        </div>
		<div class="group" background=><label for="status" class="label">Gender </label>
		<select id="gender" name="gender"> 
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
</select></div>
<div class="group" background=> <label for="placeb" class="label">Status </label>
<select id="status" name="status">
  <option value="single">Single</option>
  <option value="married">Married</option>
  <option value="divorced">Divorced</option>
  <option value="widow">Widow</option>
</select></div>
<div class="group" background=>
          <label for="religion" class="label"> <br>Religion</label>
          <input id="religion" name="religion" type="text" class="input" value=<?php echo $religion;?>>
        </div>
        <div class="group" background=>
          <label for="denomination" class="label"> <br>Denomination</label>
          <input id="denomination" name="denomination" type="text" class="input" value=<?php echo $denomination;?> >
        </div>
<div class="group" background=>
          <label for="mid" class="label">Married ID </label>
          <input id="mid" name="mid" type="number" class="input" value=<?php echo $mid;?> >
        </div> 
  

		<div class="group" background=>
          <label for="district" class="label"> <br>District</label>
          <input id="district" name="district" type="text"  class="input" value=<?php echo $district;?>>
        </div>
		<div class="group" background=>
          <label for="governorate" class="label">Governorate</label>
          <input id="governorate" name="governorate" type="text" class="input" value=<?php echo $governorate;?>>
        </div>
        <div class="group">
          <label for="idtown" class="label">id town</label>
   
  <select name="town" >
  <?php
          

$resultat = mysqli_query($con,"SELECT * FROM town");
 while($row = mysqli_fetch_array($resultat)) {
      

	echo "<option value=". $row['id'] . "> ". $row['name']. "</option></br>";

	}
    mysqli_close($con);

	?> 
          </div>
		 
		  
		<br>
     <div class="group">
          <input type="submit" class="button" value="Save" name="login">
        </div>
        <div class="hr"></div>
        
      </form>
    
  </div>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $fn=$_POST['fn'];
 $mn=$_POST['mn'];
 $ln=$_POST['ln'];
 $mothername=$_POST['mothername'];
 $nbreg=$_POST['nbreg'];
 $bd=$_POST['bd'];
 $add=$_POST['add'];
 $placeb=$_POST['placeb'];
 $gender=$_POST['gender'];
 $status=$_POST['status'];
 $district=$_POST['district'];
 $governorate=$_POST['governorate'];
 $mid=$_POST['mid'];
 $townid=$_POST['town'];
$denomination=$_POST['denomination'];
$religion=$_POST['religion'];
 $idppl=$_GET['id'];
 

 include('Connection.php');
mysqli_query($con,"UPDATE  people SET  fn='$fn',mn='$mn',ln='$ln',mothername='$mothername',nbreg='$nbreg',bd='$bd', address='$add',placeb='$placeb',gender='$gender', status='$status',religion='$religion',denomination='$denomination',district='$district',governorate='$governorate',mid='$mid',townid='$townid' WHERE  id='$idppl'");
 // echo mysqli_connect_errno($con);
//mysqli_close($con);


}
?>


  
</body>

</html>
  
