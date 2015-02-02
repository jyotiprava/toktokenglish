<?php
include_once("admin/function.php");
is_student();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>..::TOKTOKENGLISH::..</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<link href="style1.css" rel="stylesheet" type="text/css">
<link href="responsiv1.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#imgid").click(function(){
    $(".log_out").slideToggle('slow');
  });
});

	<?php
	if(isset($_GET['msg']))
	{
	?>
	alert('<?=$_GET['msg'];?>');
	<?php
	}
	?>
	</script>
	
	<script  language="javascript" type="text/javascript">
	function checkfield()
	{
	 var email=document.getElementById('email').value;
 var cpwd=document.getElementById('cpwd').value;
 var npwd=document.getElementById('npwd').value;
 var conpwd=document.getElementById('conpwd').value;
 if(email==""){

		alert("Please Enter Your email");
		document.getElementById('email').focus();
		return false;
		

	}
	else if(!email.match(format))

	{

	alert("You have entered an wrong email address!"); 
	document.getElementById('emaill').focus();
	return false;
    

	}
	 else if(cpwd==""){

		alert("Please Enter Your current password");
		document.getElementById('cpwd').focus();
		return false;
		

	}
	else if(npwd==""){

		alert("Please Enter Your new password");
		document.getElementById('npwd').focus();
		return false;
		

	}
	else  if(conpwd==""){

		alert("Please Enter Your confirm password");
		document.getElementById('conpwd').focus();
		return false;
		

	}
	else if(conpwd!=npwd){

		alert("confirm Password and new password should be matched");
		
		return false;

	}
	
	}
	</script>
	
	<!------------------------------------menu---------------------------->	
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.css" />

		<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			$(function() {

				var pos 	= 'mm-top mm-right mm-bottom',
					zpos	= 'mm-front mm-next';

				var $html 	= $('html'),
					$menu	= $('nav#menu'),
					$both	= $html.add( $menu );

				$menu.mmenu();

				//	Add the position-classnames onChange
				$('input[name="pos"]').change(function() {
					$both.removeClass( pos ).addClass( 'mm-' + this.value );
				});
				$('input[name="zpos"]').change(function() {
					$both.removeClass( zpos ).addClass( 'mm-' + this.value );
				});
			});
		</script>
<!---------------menu end-------------->

</head>
<body>
<div class="mobile_menu1">
<?php include_once('mobile_leftbar.php');?>
</div>
  <div id="topbar">
  		<div id="name_content">
        		<div id="logo">
                		<img src="images/logo.png"  />
                </div>
				<div class="mobile_menu2">
                		<a href="#menu"><img src="images/index.png"/></a>
                </div>
        </div>
  </div>
  
 <?php include_once('menubar.php');?>
  
  <div id="content_bar">
  		<div id="content_box">
        		
                <div id="content_right">
		    <h2 class="head3" style="border-bottom:2px solid #dd6a2a;">CHANGE PASSWORD</h2>
                			    <form name="f" method="post" action="updatepassword.php" onSubmit="return checkfield();">
						
					<table >
                         
						
					    <tr>
						<td>Email id:</td>
						<td><input type="text" name="email"  id="email" class="textbox" value="<?=$_SESSION['semail'];?>" readonly/></td>
					    </tr>
                                             <tr>
                                                <td>Current Password:</td>
                                                <td>
                                                    <input type="password"  id="cpwd" name="cpwd" class="textbox" required/><br/>
						    <span class="smalltext">
								Please provide your current password.
					            </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>New Password:</td>
                                                <td>
                                                    <input type="password"  id="npwdl" name="npwd" class="textbox" required/><br/>
						    <span class="smalltext">
								Please provide your New password.
					            </span>
                                                </td>
                                            </tr>
											 <tr>
                                                <td>Confirm Password:</td>
                                                <td>
                                                    <input type="password"  id="conpwd" name="conpwd" class="textbox" required/><br/>
						    <span class="smalltext">
								Please provide your Confirm password.
					            </span>
                                                </td>
                                            </tr>
					    
											<tr> 
												<td>&nbsp;</td> 
												<td><input type="submit" name="submit" value="Update" class="button" ></td> 
											</tr>
											</table>  
											</form>
        </div>
  </div>
  
<div id="footer_bar">
  	<div id="footer_content">
	    &copy; Copyright All Rights Reserved 2014
	</div>
  </div>
</body>
</html>
