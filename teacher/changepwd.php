<?php
include_once("../admin/function.php");
is_teacher();
?>
<html>
<head>
	       <title>..::Toktokenglish::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

<link href="responsiv1.css" rel="stylesheet" type="text/css">
<link href="style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.min.js"></script>
<!------------------------------------menu---------------------------->	
		<link type="text/css" rel="stylesheet" href="../css/jquery.mmenu.css" />

		
		<script type="text/javascript" src="../js/jquery-hover-effect.js"></script>
		<script type="text/javascript" src="../js/jquery.mmenu.js"></script>
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
<?php include_once("topbar.php")?>

<div class="mobile_meu1">
<?php include_once("mobile_menubar.php")?>
</div>
<div class="destop_menu1">
<?php include_once("menubar.php")?>
</div>
 
 <!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box">
				
				<div id="right_box" >
						
						<div id="content1">
								<div class="head2">
									   Change Password		
								</div>
								<div id="content2" style="min-height:350px;">
										<div class="sub_content">
										
									
					    <form name="f" method="post" action="updatepwd.php">
						<table class="table">
                                          
					    <tr>
						<td>Email Address:</td>
						<td><input type="text" name="email" class="form" value="<?=$_SESSION['temail'];?>" readonly/></td>
					    </tr>
                                             <tr>
                                                <td>Current Password:</td>
                                                <td>
                                                    <input type="password" name="cpwd" class="form" required/><br/>
						    <span class="smalltext">
								Please provide your current password.
					            </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>New Password:</td>
                                                <td>
                                                    <input type="password" name="npwd" class="form" required/><br/>
						    <span class="smalltext">
								Please provide your New password.
					            </span>
                                                </td>
                                            </tr>
											 <tr>
                                                <td>Confirm Password:</td>
                                                <td>
                                                    <input type="password" name="conpwd" class="form" required/><br/>
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
								
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->

<!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
			      &copy;Copy Right All Rights Reserved 2014
		</div>
 </div>
  <!--------------footer end---------> 
</body>
</html>