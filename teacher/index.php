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
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
	<title>..::TOKTOKENGLISH::..</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/style.css">
	
	<style>
		body {padding:80px 0 0}
		textarea, input[type="password"], input[type="text"], input[type="submit"] {-webkit-appearance: none}
		.navbar-brand {font:300 15px/18px 'Roboto', sans-serif}
		.login_wrapper {position:relative;width:380px;margin:0 auto}
		.login_panel {background:#f8f8f8;padding:20px;-webkit-box-shadow: 0 0 0 4px #ededed;-moz-box-shadow: 0 0 0 4px #ededed;box-shadow: 0 0 0 4px #ededed;border:1px solid #ddd;position:relative}
		.login_head {margin-bottom:20px}
		.login_head h1 {margin:0;font:300 20px/24px 'Roboto', sans-serif}
		.login_submit {padding:10px 0}
		.login_panel label a {font-size:11px;margin-right:4px}
		
		@media (max-width: 767px) {
			body {padding-top:40px}
			.navbar {display:none}
			.login_wrapper {width:100%;padding:0 20px}
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
	

	<div class="login_wrapper">
		<div style="display: block;" class="login_panel log_section">
			    <?php
							if(isset($_GET['mess']))
							{
							$messg=$_GET['mess'];
							echo "<h3 style='margin-top:0px; color:#5FBE5F;'>".$messg."</h3>";
							}
							if(isset($_GET['msg']))
							{
							    echo "<h3 style='color:red;'>".$_GET['msg']."</h3>";
							}
							?>
			    
			<div class="login_head">
				<h1>Log In to Teacher Panel</h1>
			</div>
			<form id="login_form" name="login" method="post" action="#" >
				<div class="form-group">
					<label for="login_username">Email</label>
					<input id="login_username" name="email" class="form-control input-lg parsley-validated" data-required="true" data-minlength="2" data-required-message="Please enter a valid Username" value="" type="text">
				</div>
				<div class="form-group">
					<label for="login_password">Password <a href="#" class="pull-right">Forgot password?</a></label>
					<input id="login_password" name="password" class="form-control input-lg parsley-validated" data-required="true" data-minlength="6" data-minlength-message="Password should have at least 6 characters." data-required-message="Please enter a valid Password"  type="password">
					<label class="checkbox"><input name="login_remember" id="login_remember" type="checkbox"> Remember me</label>
				</div>
				<div class="login_submit">
					<button class="btn btn-primary btn-block btn-lg" name="loginbtn">Log In</button>
				</div>
				<div class="text-center">
					<small>Not registered? <a class="form_toggle" href="#reg_form"> Sign up here</a></small>
				</div>
			</form>
		</div>
		<div class="login_panel reg_section" style="display: none;">
			<div class="login_head">
				<h1>Sign Up</h1>
			</div>
			<form  id="register_form" name="registerform" action="teacher_signup.php" method="post" onsubmit="return validate();">
				<div class="form-group" style="width: 49%; float: left;">
					<label for="register_username">First Name</label>
					<input id="fname" name="fname" class="form-control input-lg" type="text">
				</div>
				<div class="form-group" style="width: 49%;float: left; margin-left: 2%;">
					<label for="register_username">Last Name</label>
					<input id="lname" name="lname" class="form-control input-lg" type="text">
				</div>
				<div class="form-group" >
					<label for="register_email">Email</label>
					<input id="emaill" name="email" class="form-control input-lg" value="" type="email">
				</div>
				<div class="form-group" style="width: 49%; float: left;">
					<label for="register_password">Password</label>
					<input id="password1" name="password1" class="form-control input-lg" value="" type="password">
				</div>
				<div class="form-group" style="width: 49%; float: left; margin-left: 2%;">
					<label for="register_password">Confirm Password</label>
					<input id="password2" name="password2" class="form-control input-lg" value="" type="password">
				</div>
				<div class="form-group" style="width: 49%; float: left;">
					<label for="register_username">Location</label>
					<input id="location" name="location" class="form-control input-lg" type="text">
				</div>
				<div class="form-group" style="width: 49%; float: left; margin-left: 2%;">
					<label for="register_username">Contact</label>
					<input id="contact" name="contact" class="form-control input-lg" type="text"  onKeyPress="return numbersonly(event)">
				</div>
				<div class="form-group">
					<label for="register_username">Qualification</label>
					<input id="quali" name="quali" class="form-control input-lg" type="text">
				</div>
				<div class="login_submit">
					<button class="btn btn-primary btn-block btn-lg" name="registerbtn">Sign Up</button>
				</div>
				<div class="text-center">
					<small>Already have an account, <a class="form_toggle" href="#login_form">Go to Login Panel</a></small>
				</div>
			</form>
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
	
	<script src="js/parsley.js"></script>
	<script>
		$(function() {
			
			//* validation
			$('#login_form').parsley({
				errors: {
					classHandler: function ( elem, isRadioOrCheckbox ) {
						if(isRadioOrCheckbox) {
							return $(elem).closest('.form_sep');
						}
					},
					container: function (element, isRadioOrCheckbox) {
						if(isRadioOrCheckbox) {
							return element.closest('.form_sep');
						}
					}
				}
			});
			
			//* change form
			$('.form_toggle').on('click',function(e){
				$('.login_panel').slideToggle(function() {
					if($('.log_section').is(':visible')) {
						$('.login_toggle').closest('li').addClass('active').siblings('li').removeClass('active');
					} else {
						$('.register_toggle').closest('li').addClass('active').siblings('li').removeClass('active');
					}
				});
				e.preventDefault();
			});
			
			$('.login_toggle').on('click',function(e){
				if($('.log_section').is(':hidden')) {
					$('.reg_section').slideUp();
					$('.log_section').slideDown();
					$(this).closest('li').addClass('active').siblings('li').removeClass('active');
				}
				e.preventDefault();
			});
			$('.register_toggle').on('click',function(e){
				if($('.reg_section').is(':hidden')) {
					$('.log_section').slideUp();
					$('.reg_section').slideDown();
					$(this).closest('li').addClass('active').siblings('li').removeClass('active');
				}
				e.preventDefault();
			});
			
			
			
		});
	</script>

	

</body></html>