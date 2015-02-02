<?php
include_once("admin/function.php");
is_student();
$id=$_GET['id'];
$qallcourse=mysql_query("select * from `course` where `id`='$id'")or die(mysql_error());
$rallcourse=mysql_fetch_array($qallcourse);
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
<style>
  
    p{
	text-align: center;font-family:Arial, Helvetica, sans-serif; font-size:13px;line-height: 1.7;}
    
    </style>
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
  <?php include_once('menubar.php') ?>

  <div id="content_bar">
  		<div id="content_box">
        		
                <div id="content_right">
		     <div class="boc5">
                	 <h3 style="text-align:center; background:rgb(249,198,103); padding-top: 5px; padding-bottom: 5px; color: #333;"><?=$rallcourse['coursename'];?></h3>
                            <p style="text-align:center;">
				<span style="font-size: 18px;">
				    Total No. Of Class : <span style="color: #df600f;"><?=$rallcourse['noclass'];?></span>
				    <br/>
				     Time Of Each Class : <span style="color: #df600f;"><?=$rallcourse['time'];?></span>
				     <br/>
				      Total Fee: <span style="color: #df600f;font-size: 26px;">$ <?=$rallcourse['fee'];?></span>
				</span>
                            	<?=htmlspecialchars_decode($rallcourse['description']);?>
 </p>
        <br />
	 <p class="text" style="text-align:center;">
<input type="button"  value="Apply" class="btn-skin btn button" style="margin-top:10px;" onclick="window.location.href='scart_confirm.php?id=<?=$id;?>'"/>
                            </p>
                   
        </div>
  </div>
		</div>
  
 <div id="footer_bar">
  	<div id="footer_content">
	    &copy; Copyright All Rights Reserved 2014
	</div>
  </div>
</body>
</html>
