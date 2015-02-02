<?php
include_once("admin/function.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>..::TOK TOK ENGLIS::..</title>
  
    <!-- css -->
	<link rel="stylesheet" type="text/css" href="responsiv.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

        <style>
        .form1{
		width:350px;
		height:35px;
		font-size: 14px;
		line-height: 1.6em;
		border: 1px solid #EEE;
		box-shadow: none;
		border-radius: 2px;
		border:1px solid #ccc;
		}
        </style>

	
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
	document.getElementById('email').focus();
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
    <style>
    .boc5{width:360px; height:auto; float:left; padding:5px; border:3px solid #e16428; margin-right:15px;}
    </style>	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div class="mobile_top pass" style="width:100%; height:auto; float:left;">
	<div class="tob_bar1 ">
     		<div class="logo">
            		<img src="images/logo.png" width="100%"/>
            </div>
	</div>
</div>
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.html" class="brand"><img src="images/logo.png" /></a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="index.php">Home</a></li>
								  <li class="active"><a href="mypage.php">Available Course</a></li>
								   <li class="active"><a href="changepassword.php">Change Password</a></li>
                                                                 <li class="active"><a href="logout.php">Logout</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  
    
    
    
    	<!-- Section: student -->
    <section id="student" class="home-section color-dark bg-white" style="padding-top:50px;">
		<div class="container">
        <div class="row">
        	<h2 class="forgot"></h2>
        	<div style=" height:auto; float:left;">
		    <?php
							
							if(isset($_GET['msg']))
							{
							    echo "<h6 style='color:red;'>".$_GET['msg']."</h6>";
							}
							?>
		   
		    <form name="f" method="post" action="link.php" onSubmit="return checkfield();">
						<table class="table">
                          <tr>
						<td colspan="2">FORGOT PASSWORD</td>
						
					    </tr>
						
					    <tr>
						<td>Email id:</td>
						<td><input type="text" name="email"  id="email" class="form" value=""></td>
					    </tr>
                                             
                                            
					    
											<tr> 
												<td>&nbsp;</td> 
												<td><input type="submit" name="submit" value="submit" class="button" ></td> 
											</tr>
											</table>  
											</form>
					  

            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: about -->
    

	
	
	
	
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    
    
</body>

</html>
