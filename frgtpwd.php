<?php
include_once("admin/function.php");
$select=mysql_query("select `email` from  `user_signin` where `unique_key`='$_GET[unique]'")or die(mysql_error());
echo " select `email` from  `user_signin` where `unique_key`='$_GET[unique]'";
$result=mysql_fetch_array($select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>..::TOK TOK ENGLIS::..</title>
  
    <!-- css -->
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
		
	<script>
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
	
 
 var npwd=document.getElementById('newpassword').value;
 var conpwd=document.getElementById('conpwd').value;
 
	
	 if(npwd!=conpwd){

		alert("confirm Password and new password should be matched");
		document.getElementById('conpwd').focus();
		return false;

	}
	
	}
	</script>
    <style>
    .boc5{width:360px; height:auto; float:left; padding:5px; border:3px solid #e16428; margin-right:15px;}
    </style>	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	
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
    <section id="student" class="home-section color-dark bg-white" style="padding-top:20px;">
		<div class="container">
        <div class="row">
        	<h6 style="width:100%; height:auto; float:left; text-align:center;">Forgot Password</h6>
        	<div style="width:100%; height:auto; float:left;">
		    <?php
							
							if(isset($_GET['msg']))
							{
							    echo "<h6 style='color:red;'>".$_GET['msg']."</h6>";
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
											<input type="password" name="npwd" id="newpassword" class="textbox" tabindex="2" autocomplete="off" required></td>
                                     </tr>
									  <tr>
                                     		<td> Confirm Password</td>
                                     </tr>
									 <tr>
                                     		<td> <input type="password"  id="conpwd"  name="conpwd" class="textbox" tabindex="2" autocomplete="off" required></td>
                                     </tr>
                                      <tr>
                                     		<td> <input type="submit" name="loginbtn" id="loginbtn" value="submit" class="btn" tabindex="3" style="margin-top:10px; color:#333;">
											
                                     </tr>
                                     
                                </table>
                              </form>    	
           
        </div>		
		</div>
	</section>
	<!-- /Section: about -->
    

	
	
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Press release</a></li>
					</ul>
				</div>
				<div class="col-md-6 text-right">
					<p>&copy;Copyright 2014</p>
				</div>
			</div>	
		</div>
	</footer>

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
