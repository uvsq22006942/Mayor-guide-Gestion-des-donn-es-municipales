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
<?php 
    $id = $_GET['id'];
    $nbreg=0;
    $add=0;
    $status=0;
    $district=0;
    $governorate=0;
    $mid=0;
    $townid=0;
   
    $femalenbreg=0;
    $femaleadd=0;
    $femalestatus=0;
    $femaledistrict=0;
    $femalegovernorate=0;
    $femalemid=0;
    $femaletownid=0;
    //$idppl=$_SESSION['$idd'];
    $wifID=0;
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
         $district=$ro['district'];
         $governorate=$ro['governorate'];
         $fid=$ro['fid'];
         $mid=$ro['mid'];
         $townid=$ro['townid'];
	  }
	 if($gender=='male'||$gender=='Male'){
		$sql2="select * from people where mid='$id' ";
            $result2=mysqli_query($con,$sql2);
            $ffid='';
      while($row2 = mysqli_fetch_array($result2)) {
          $manid=$row2['id'];
          $ffn=$row2['fn'];
         $fmn=$row2['mn'];
         $fln=$row2['ln'];
         $fmothername=$row2['mothername'];
         $fnbreg=$row2['nbreg'];
         $fbd=$row2['bd'];
         $fadd=$row2['address'];
         $fplaceb=$row2['placeb'];
         $fgender=$row2['gender'];
         $fstatus=$row2['status'];
         $fdistrict=$row2['district'];
         $fgovernorate=$row2['governorate'];
        $ffid=$row2['fid'];
         $fmid=$row2['mid'];
         $ftownid=$row2['townid'];
         $wifID=$manid;

    }       
   
   
mysqli_query($con,"UPDATE  people SET status='death' WHERE  id='$id'");

mysqli_query($con,"UPDATE  people SET status='Widow' WHERE  mid='$id'");

     }
     else if($gender='female'||$gender='Female'){

        mysqli_query($con,"UPDATE  people SET status='death'WHERE  id='$id'");

        $count=0;
        $sql4="select * from people where mid='$mid'";
        $result4=mysqli_query($con,$sql4);
        while($row4 = mysqli_fetch_array($result4)) {
          $count++;
        }
if($count==0)
mysqli_query($con,"UPDATE  people SET status='Widow' WHERE  id='$mid'");

     }
      


   /*     
		$sql1="select * from people where id='$fid'";// and gender='female'||gender='Female' ";
	        $result1=mysqli_query($con,$sql1);
      while($row = mysqli_fetch_array($result1)) {
          $mfn=$row['fn'];
         $mmn=$row['mn'];
         $mln=$row['ln'];
         $mmothername=$row['mothername'];
         $mnbreg=$row['nbreg'];
         $mbd=$row['bd'];
         $madd=$row['address'];
         $mplaceb=$row['placeb'];
         $mgender=$row['gender'];
         $mstatus=$row['status'];
         $mdistrict=$row['district'];
         $mgovernorate=$row['governorate'];
         $mfid=$row['fid'];
         $mmid=$row['mid'];
         $mtownid=$row['townid'];

  
         
           $_SESSION['MaleId'] =$row['id'];
           $nbreg=$mnbreg;
           $add=$madd;
           $status="Devorced";
           $district=$mdistrict;
           $governorate=$mgovernorate;
           $mid=0;
           $townid=$mtownid;
	  }

/*
 $nbreg=$mnbreg;
 $add=$madd;
 $status="Devorced";
 $district=$mdistrict;
 $governorate=$mgovernorate;
 $mid=0;
 $townid=$mtownid;

 $femalenbreg=$mfnbreg;
 $femaleadd=$mfadd;
 $femalestatus="Devorced";
 $femaledistrict=$mfdistrict;
 $femalegovernorate=$mfgovernorate;
 $femalemid=0;
 $femaletownid=$mftownid;
 //$idppl=$_SESSION['$idd'];
 $wifID=$wifeid;
include('Connection.php');
*/

?>
 <div
>
 <a  href="<?php $idton= $_SESSION['townenter']; echo "showppl.php?id=$idton" ?>">People</a>

 </div>