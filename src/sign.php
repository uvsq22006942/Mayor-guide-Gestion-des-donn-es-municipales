




<html>
<style>



body{
  margin:100px ;
  
  color:#6a6f8c;
  background:#c8c8c8;
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:bzoth;display:block}
a{color:inherit;text-decoration:none}
.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:525px;
  min-height:700px;
  position:relative;
  background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background: #212529;
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
        <a href="index.php">Back  </a>
        </div>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Forgot Password</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">
    <form method="post" action="sign.php">
        <div class="group">
          <label for="us" class="label">Username</label>
          <input id="us" name="us" type="text" class="input">
        </div>
		  <div class="group">
          <label for="old" class="label">Old Password</label>
          <input id="old" name="old" type="password" class="input" >
        </div>
        <div class="group">
          <label for="new" class="label">New Password</label>
          <input id="news" name="news" type="password" class="input"  >
        </div>
 <div class="group">
          <label for="conf" class="label">confirme Password</label>
          <input id="conf" name="conf" type="password" class="input"  >
        </div>
       
     <div class="group">
          <input type="submit" class="button" value="Save " name="Save">
        </div>
        <div class="hr"></div>
		 
        
		
   
		
  



<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
		$us = $_POST['us'];
		$pass = $_POST['old'];
		$pass2=$_POST['news'];
		$pass3=$_POST['conf'];
			
		
		if (!empty( $us) && !empty( $pass) && !empty( $pass2) && !empty( $pass3)){
		if($pass2==$pass3){
		
		$con=mysqli_connect("localhost","root","","guide");
        $sql="select * from adminn where password='$pass' 
				 AND username='$us'";
				$result=mysqli_query($con,$sql);
		$nbrow=mysqli_num_rows($result);
		if ($nbrow == 1  ) {
			include('Connection.php');

       mysqli_query($con,"UPDATE  adminn SET  password='$pass2'
       WHERE  username='$us'");
			
		}
		else{
				echo "username or password invalide";
		}
		}
		else{
			echo "new password is differ comf";
			
		}
}
else{
	echo "any input is empty";
	
}
}

?>
  
        </form>
 </div>
   </div>
 
</body> 





</html>