<?php
include_once("../admin/function.php");
if(isset($_POST['loginbtn'])){
$user=htmlentities($_POST['email'],ENT_QUOTES);
$pwd=md5(htmlentities($_POST['password'],ENT_QUOTES));
$res=mysql_query("select * from `teacher_login` where `email`='$user' and `password`='$pwd'") or die (mysql_error());
$no=mysql_num_rows($res);
if($no>0){
 $fetch=mysql_fetch_array($res);
		$_SESSION['tidval']=$fetch['slno'];
		$_SESSION['temail']=$user;
		header("location:home.php");
}
else{
$msg="wrong emailid or password";
header("location:index.php?mess=$msg");
}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..::::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />


<link href="font.css" type="text/css" rel="stylesheet" media="screen"  />

<script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="formslider.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
<style>
@font-face {
    font-family: 'EstrangeloEdessaRegular';
    src: url('font/estrangeloedessa.eot');
    src: url('font/estrangeloedessa.eot') format('embedded-opentype'),
         url('font/estrangeloedessa.woff2') format('woff2'),
         url('font/estrangeloedessa.woff') format('woff'),
         url('font/estrangeloedessa.ttf') format('truetype'),
         url('font/estrangeloedessa.svg#EstrangeloEdessaRegular') format('svg');
}
</style>
<script  type='text/javascript'>
function validate()
{
 var fname=document.getElementById('fname').value;
 var lname=document.getElementById('lname').value;
var emailid=document.getElementById('emaill').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
var password=document.getElementById('password1').value;
var retypepassword=document.getElementById('password2').value;
var locationn=document.getElementById('location').value;
var contactt=document.getElementById('contact').value;
var quali=document.getElementById('quali').value;
	if(fname==""){

		alert("Please Enter Your first Name");
		document.getElementById('fname').focus();
		return false;
		

	}
	else if(lname==""){

		alert("Please Enter Your last Name");
		document.getElementById('lname').focus();
		return false;
		

	}
	else if(emailid==""){

		alert("Please Enter Your emailaddress");
		document.getElementById('emaill').focus();
		return false;

	}
	
	else if(!emailid.match(format))

	{

	alert("You have entered an wrong email address!"); 
	document.getElementById('emaill').focus();
	return false;
    

	}
	else if(password==""){

		alert("Please Enter Your password");
		document.getElementById('password1').focus();
		return false;

	}
	else if(retypepassword!=password){

		alert("Password and Confirmpassword are mismatched");
		document.getElementById('password2').focus();
		return false;

	}
	else if(locationn==""){

		alert("Please Enter Your location");
		document.getElementById('location').focus();
		return false;

	}
	else if(contactt==""){

		alert("Please Enter Your contact number");
		document.getElementById('contact').focus();
		return false;

	}
	else if(contactt.length<10 || contactt.length>10){

		alert("Please Enter 10 digit contact number");
		document.getElementById('contact').focus();
		return false;

	}
	else if(quali==""){

		alert("Please Enter Your qualification");
		document.getElementById('quali').focus();
		return false;

	}
	else
	{
	return true;
	}
}
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
</head>
<body>
<!--------------------------content bar----------------------->
<div id="content_bar" >
		<div id="content_box">
        		 <div id="w">	
                        <div id="page" style="padding-bottom:20px;">
                          <div id="content-login">
                            <h2>Login to the Site</h2>
                            <div class="content">
							<?php
							if(isset($_GET['mess']))
							{
							$messg=$_GET['mess'];
							echo "<h3 style='margin-top:0px; color:#5FBE5F;'>".$messg."</h3>";
							}
							if(isset($_GET['msg']))
							{
							    echo "<h3 style='color:red;'>".$_GET['msg']."</span>";
							}
							?>
                              <a href="#" class="slidelink" id="showregister">Don't Have An Account? &rarr;</a>
                              <form id="login" name="login" method="post" action="#" >
                            <table style="width:100%; font-size:15px; font-weight:bold; line-height:2.5;">
                            		<tr>
                                    		<td>
                                            		Email Address
                                            </td>
                                     </tr>
                                     <tr>
                                     		<td> <input type="email" name="email" id="email" class="textbox" tabindex="1" autocomplete="off" required></td>
                                     </tr>
                                      <tr>
                                     		<td> Password</td>
                                     </tr>
                                     <tr>
                                     		<td> <input type="password" name="password" id="password" class="textbox" tabindex="2" autocomplete="off" required></td>
                                     </tr>
                                      <tr>
                                     		<td> <!--<a href="requestpage1.htm" >--><input type="submit" name="loginbtn" id="loginbtn" value="Login" class="btn" tabindex="3" style="margin-top:10px;"><!-- </a>-->
											<a href="forgotpassword.php" class="slidelink" id="showregister" style="font-size:12px;">Forgot Password</a></td>
                                     </tr>
                                     
                                </table>
                              </form>
                             
                            </div>
                          </div><!-- /end #content-login -->
                          
                          
                          <div id="content-register">
                            <h2>Register a New Account</h2>
							
								<form  name="registerform" action="teacher_signup.php" method="post" onsubmit="return validate();">
                            <div class="content">
                            <a href="#" class="leftsidelink" id="showlogin">&larr; Already Have an Account? Login Now!</a>
                            
                            <table style="width:100%; height:auto; float:left; line-height:2.5; font-size:15px; font-weight:bold;">
						
                            		<tr>
                                    		<td>First Name</td>
                                    </tr>
                                    <tr>
					<td> <input type="text" name="fname" id="fname" class="textbox"  autocomplete="off" /></td>
                                    </tr>
                             		<tr>
                                    		<td>Last Name</td>
                                    </tr>
                                    <tr>
                                    		<td> <input type="text" name="lname" id="lname" class="textbox"  autocomplete="off" /></td>
                                    </tr>
                             		<tr>
                                    		<td>Email Address</td>
                                    </tr>
                                    <tr>
                                    		<td> <input type="text" name="email" id="emaill" class="textbox"  autocomplete="off" /></td>
                                    </tr>
                             		<tr>
                                    		<td>Password</td>
                                    </tr>
                              		<tr>
                                    		<td> <input type="password" name="password1" id="password1" class="textbox"  autocomplete="off" /></td>
                                    </tr>
                              		<tr>
                                    		<td>Confirm Password</td>
                                    </tr>
                              		<tr>
                                    		<td><input type="password" name="password2" id="password2" class="textbox"  autocomplete="off" /></td>
                                    </tr>
									<tr>
                                    		<td>Location</td>
                                    </tr>
                                    <tr>
                                    		<td> <input type="text" name="location" id="location" class="textbox"  autocomplete="off" /></td>
                                    </tr>
									<tr>
                                    		<td>Contact</td>
                                    </tr>
                                    <tr>
                                    		<td> <input type="text" name="contact" id="contact" class="textbox"  autocomplete="off" onKeyPress="return numbersonly(event)" /></td>
                                    </tr>
									<tr>
                                    		<td>Qualification</td>
                                    </tr>
                                    <tr>
                                    		<td><textarea class="textbox" name="quali" id="quali"></textarea></td>
                                    </tr>
                                    <tr>
                                    		<td><input type="submit" name="registerbtn"  value="Sign Up" class="btn"  style="margin-top:10px; margin-bottom:10px;" /></td>
                                    </tr>
									
                           </table>
                            
                            </div>
							</form>
                          </div><!-- /end #content-register -->
                        </div><!-- /end #page -->
                      </div><!-- /end #w -->
        </div>
</div>
<!--------------------------content bar end----------------------->


</body>
</html>
