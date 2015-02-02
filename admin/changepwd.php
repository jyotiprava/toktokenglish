<?php

?>
<html>
<head>
	       <title>..::Toktokenglish::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--------------top bar -------->
 <div id="top_bar">
 		<div id="top_box">
				<h2 style="margin-top:0px; padding-top:8px; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">Admin Panel</h2>
		</div>
 </div>
 <!--------------top bar end-------->
 
 <!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box">
				<?php
				include_once("leftbar.php");
				?>
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
									   Welcome		
								</div>
								<div id="content2" style="min-height:350px;">
										<div class="sub_content">
										
									
					    <form name="f" method="post" action="changepassword.php">
						<table class="table">
                                          
					    <tr>
						<td>Username:</td>
						<td><input type="text" name="username" class="form" value="admin" readonly/></td>
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
