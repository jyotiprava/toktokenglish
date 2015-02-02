<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>..::TOK TOK ENGLIS::..</title>
  
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	
    	<link rel="stylesheet" type="text/css" href="css/pfold.css" />
		<link rel="stylesheet" type="text/css" href="responsiv.css" />
        <link rel="stylesheet" type="text/css" href="css/custom2.css" />
        <link rel="stylesheet" href="css/reveal.css">
		
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
        <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>
        <style>
        .form1{
		font-size: 14px;
		line-height: 1.6em;
		border: 1px solid #EEE;
		box-shadow: none;
		border-radius: 2px;
		border:1px solid #ccc;
		}
		.nav > li > a { font-size:20px; font-weight:bold;}
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
	<style>
	.navbar-toggle{ float:left;}
	</style>	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

 <div data-ratio="0.4167" class="flowplayer video" id="player" style="background:#fff;">
	   <video  style="width:100%; height: auto; min-height:100%; left:-2%; top:-4%;background:#fff;" autoplay loop>
         <source type="video/webm" src="tok4.mp4" >
         <!--- <source type="video/mp4" src="back.mp4" >---------->
         <!--- <source type="video/ogv" src="back.ogv" >-------->
      </video>

   </div>
   
<div class="mobile_top" style="width:100%; height:auto; float:left;">
	 <div class="tob_bar1">
     		<div class="logo">
            		<img src="images/logo.png" width="100%"/>
            </div>
			<div class="col-md-10 mobilemenu">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="#intro">Home</a></li>
                                                                  <li><a href="#student">Student English</a></li>
                                                                  <li><a href="#about">Professional English</a></li>
								  <li><a href="#service">How it works</a></li>
                                                                  <li><a href="#works">Our team</a></li>				                                                                  
                                                                  <li><a href="#contact">Contact us</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
			<div class="clear"></div>
            <div class="login_box">
            		<p style="color:#fff;">
                         <a href="#" class="big-link" data-reveal-id="myModal"><span style="float:left; margin-right:15px; text-decoration:underline; color:#037b68;">LOG IN</span></a>
                         <a href="#" class="big-link" data-reveal-id="myModal1"><span style="float:left; margin-right:0px; text-decoration:underline; color:#037b68;">SIGN UP</span></a>
                         <span style="display:none;">LANGUAGE</span>
                     </p>
            </div>
            <div id="myModal" class="reveal-modal">
		  		<form name="myform" method="post" action="login.php">
				  <h4 style="margin-bottom:15px; font-size:25px;">LOG IN</h4>
               	  <table style="width:100%; height:100px; float:left;">
                		<tr>
                        		<td>Email</td>
                        </tr>
                        <tr>
                        		<td><input type="text" name="email" value="" class="form1" required/></td>
                        </tr>
                        <tr>
                        		<td>Password</td>
                        </tr>
                        <tr>
                        		<td><input type="password" name="password" value="" class="form1" required/></td>
                        </tr>
                        <tr>
                        		<td><input type="submit" name="submit" value="Submit" class="btn-skin btn" style="margin-top:10px;" /></td>
                        </tr>
						<tr>
                        		<td><a href="forgotpassword.php" style="text-decoration:underline;">Forgot Password</a></td>
                        </tr>
                </table>
				</form>
                <a class="close-reveal-modal">&#215;</a>
		</div>
        
        <div id="myModal1" class="reveal-modal" style="top:0px;">
		  		
               	<form name="myform" method="post" action="signin.php">
		  		<h4 style="margin-bottom:15px; font-size:25px;">SIGN UP</h4>
				
               	<table style="width:100%; height:100px; float:left;">
                		<tr>
                        		<td>First Name</td>
                        </tr>
                        <tr>
                        		<td><input type="text" name="fname" value="" class="form1" required/></td>
                        </tr>
                        <tr>
                        		<td>Last Name</td>
                        </tr>
                        <tr>
                        		<td><input type="text" name="lname" value="" class="form1" required/></td>
                        </tr>
                        <tr>
                        		<td>Email</td>
                        </tr>
                        <tr>
                        		<td><input type="email" name="email" value="" class="form1" required/></td>
                        </tr>
						<tr>
                        		<td>Password</td>
                        </tr>
                        <tr>
                        		<td><input type="password" name="password" value="" class="form1" required/></td>
                        </tr>
                        <tr>
                        		<td>Phone</td>
                        </tr>
                        <tr>
                        		<td><input type="text" name="phone" value="" class="form1" required/></td>
                        </tr>
                        <!--<tr>
                        		<td>Message</td>
                        </tr>
                        <tr>
                        		<td><textarea name="msg" class="form1" style=" height:80px;" ></textarea></td>
                        </tr>-->
                        <tr>
                        		<td><input type="submit" name="submit" value="Submit" class="btn-skin btn" style="margin-top:10px;" /></td>
                        </tr>
                </table>
				</form>
                <a class="close-reveal-modal">&#215;</a>
		</div>
        
        
     </div>
</div>
	<section class="hero top_height" id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
					<div class="animatedParent">
						<h1 class="animated fadeInDown" style="letter-spacing:1px; color:#0fb79d;">We help you think in English!</h1>
						<p class="animated fadeInUp" style="margin-top:20px; color:#df600f;">Affordable Personalized & affordable live classes with American speakers/teachers</p>
					</div>
			   </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center" style="display:none;">
                  <a href="#about" class="learn-more-btn btn-scroll">Learn more</a>
                </div>
              </div>
            </div>
    </section>
	
	
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
                                                                  <li class="active"><a href="#intro">Home</a></li>
                                                                  <li><a href="#student">Student English</a></li>
                                                                  <li><a href="#about">Professional English</a></li>
																  <li><a href="#service">How it works</a></li>
                                                                  <li><a href="#works">Our team</a></li>				                                                                  
                                                                  <li><a href="#contact">Contact us</a></li>
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
    <section id="student" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated ">
					<h2 class="h-bold">Student English</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
        <div class="row">
        	<div style="width:100%; height:auto; float:left;">
            		 <section class="main demo-2">
				<div id="grid" class="clearfix imgbox">
					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/3.jpg" alt="image03" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/3.jpg" alt="image03-large" />
							<div class="title"><h4>Angry Nerd Blofeld</h4> by Dan Matutina <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/1.jpg" alt="image01" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/1.jpg" alt="image01-large" width="460" height="360" />
							<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/2.jpg" alt="image02" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/2.jpg" alt="image02-large" />
							<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="images/thumbs/4.jpg" alt="image04" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="images/large/4.jpg" alt="image04-large" />
							<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

				</div><!-- / grid -->
	
       </section>
	   
<div style="clear:both;"></div>


            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
					Lorem ipsum dolor sit amet, vis tale malis tacimates et, graece doctus omnesque ne est, deserunt pertinacia ne nam. Pro eu simul affert referrentur, natum mutat erroribus te his
					</p>
					<p>
					Ne mundi fabulas corrumpit vim, nulla vivendum conceptam eu nam. Ius ex principes complectitur, ex quo duis suscipit. Ius fastidii reprimique no. Sadipscing appellantur pri ad. Oratio moderatius definitiones cum ex, mea ne brute vivendum percipitur. 
					</p>
					<a href="#service" class="btn btn-skin btn-scroll">What we do</a>
				</div>
            </div>
		

        </div>		
		</div>

	</section>
	
	<!-- /Section: about -->
    

	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated ">
					<h2 class="h-bold">Professional English</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">
        <div class="row">
        	<div style="width:100%; height:auto; float:left; margin-bottom:30px;">
            		<div class="imgbox1">
                            <img src="images/img10.jpg" />
                            <img src="images/img11.jpg" />
                            <img src="images/img12.jpg" />
                            <img src="images/img13.jpg" />
                     </div>
                </div>
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
					Lorem ipsum dolor sit amet, vis tale malis tacimates et, graece doctus omnesque ne est, deserunt pertinacia ne nam. Pro eu simul affert referrentur, natum mutat erroribus te his
					</p>
					<p>
					Ne mundi fabulas corrumpit vim, nulla vivendum conceptam eu nam. Ius ex principes complectitur, ex quo duis suscipit. Ius fastidii reprimique no. Sadipscing appellantur pri ad. Oratio moderatius definitiones cum ex, mea ne brute vivendum percipitur. 
					</p>
					<a href="#service" class="btn btn-skin btn-scroll">What we do</a>
				</div>
            </div>
		

        </div>		
		</div>

	</section>
	<!-- /Section: about -->
	
	
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">How it works</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-6 col-sm-4 col-md-4 col1">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-laptop fa-2x"></span> 
					</div>
					<div class="service-desc">						
						<h5>Web Design</h5>
						<div class="divider-header"></div>
						<p>
						Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
						</p>
						<a href="#" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4 col1">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-camera fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Photography</h5>
						<div class="divider-header"></div>
						<p>
						Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
						</p>
						<a href="#" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4 col1">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-code fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Graphic design</h5>
						<div class="divider-header"></div>
						<p>
						Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
						</p>
						<a href="#" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>

        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated">Our team</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3 animated fadeInUp">
							<a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/1.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slow">
							<a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/2.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slower">
							<a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/3.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp">
							<a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/4.jpg" class="img-responsive" alt="img">
							</a>
						</div>
					</div>
	
                </div>
            </div>	
		</div>

	</section>
	<!-- /Section: works -->

	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
						<div class="animatedParent">
							<div class="section-heading text-center">
							<h2 class="h-bold animated">Contact us</h2>
						<div class="divider-header"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="name" placeholder="Enter name" required />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="email" placeholder="Enter email" required />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Subject" required />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required
										placeholder="Message"></textarea>
								</div>						
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
									Send Message</button>
							</div>
						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->

	
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
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>
	
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.pfold.js"></script>
		<script type="text/javascript">
			$(function() {

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#grid > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['right','top']; break;
						case 3 : direction = ['left','top']; break;
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						centered : true
					} );

					$item.find( 'span.icon-eye' ).on( 'click', function() {

						if( !opened ) {
							opened = true;
							pfold.unfold();
						}


					} ).end().find( 'span.icon-cancel' ).on( 'click', function() {

						pfold.fold();

					} );

				} );
				
			});
		</script>
    
</body>

</html>
