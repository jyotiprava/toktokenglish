<?php
include_once("../admin/function.php");
$sel=mysql_query("select `email` from  `teacher_login` where `unique_key`='$_GET[unique]'") or die(mysql_error());

$result=mysql_fetch_array($sel);
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
<script  language="javascript" type="text/javascript">
	function checkfield()
	{
	
 
 var npwd=document.getElementById('password').value;
 var conpwd=document.getElementById('password2').value;
 
	
	 if(npwd!=conpwd){

		alert("confirm Password and new password should be matched");
		document.getElementById('password2').focus();
		return false;

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
							
							if(isset($_GET['msg']))
							{
							    echo "<h3 style='color:red;'>".$_GET['msg']."</span>";
							}
							?>
                              <form id="login" name="login" method="post" action="check.php" onSubmit="return checkfield();" >
                            <table style="width:100%; font-size:15px; font-weight:bold; line-height:2.5;">
                            		<tr>
                                    		<td>
                                            		Email Address
                                            </td>
                                     </tr>
                                     <tr>
                                     		<td> <input type="text" name="email" class="form" value="<?php echo $result['email'];?>" readonly/></td>
                                     </tr>
                                      <tr>
                                     		<td>  New Password</td>
                                     </tr>
                                     <tr>
                                     		<td>
											<input type="hidden" name="uniquekey" value="<?=$_GET['unique'];?>" /> 
											<input type="password" name="pwd" id="password" class="textbox" tabindex="2" autocomplete="off" required></td>
                                     </tr>
									  <tr>
                                     		<td> Confirm Password</td>
                                     </tr>
									 <tr>
                                     		<td> <input type="password"  id="password2" name="pwd2" class="textbox" tabindex="2" autocomplete="off" required></td>
                                     </tr>
                                      <tr>
                                     		<td> <!--<a href="requestpage1.htm" >--><input type="submit" name="loginbtn" id="loginbtn" value="submit" class="btn" tabindex="3" style="margin-top:10px;"><!-- </a>-->
											
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
