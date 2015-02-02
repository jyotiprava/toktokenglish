<?php
include_once("../admin/function.php");
is_teacher();
$tid=$_GET['tid'];
$sql=mysql_query("select * from `teacher_login` where `slno`='$tid'");
$res=mysql_fetch_array($sql);
?>
<html>
<head>
	       <title>..::TOKTOKENGLISH::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

<link href="responsiv1.css" rel="stylesheet" type="text/css">
<link href="style1.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery.min.js"></script>



<style>
.green
{
background:green;
color:#fff;
border:none;
padding:4px;
paddding-left:6px;
padding-right:6px;
}
</style>
<script type="text/javascript">
function courseId(val) {
$.ajax({
	       url:"ajax_getstudent.php?id="+val,
	       success:function(result){
		   var x=result.split("|");
		   var x1=x[0];
		   var x2=x[1];
		   $('#newrow').html(x1);
		   $('#newrow1').html(x2);
	       }
	       });
}
</script>
<script>
function getcolor(ival)
{

$('#divid'+ival).html("<input type='button' class='green' value='"+ival+"'/>");
$('#hdival').val(ival);
$('.disabl').attr('disabled',true);

}
</script>
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
<script>
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
<script  type='text/javascript'>
function validate()
{
var emailid=document.getElementById('emailid').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
var contactt=document.getElementById('contact').value;
if(emailid!='' && !emailid.match(format))

	{
	alert("You have entered an wrong email address!"); 
	document.getElementById('emailid').focus();
	return false;
	}
	else if(contactt!='' && contactt.length<10 || contactt.length>10){

		alert("Please Enter 10 digit contact number");
		document.getElementById('contact').focus();
		return false;

	}
}
</script>
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
									  Edit Profile		
								</div>
								<div id="content2" style="min-height:350px;">
									   <div class="sub_content">
											  <form name="f" method="post" action="update_profile.php" enctype="multipart/form-data" onsubmit="return validate();">
													 
											  <table>
											      
											      <tr><td colspan="2">
													 <?php
												     if(isset($_GET['mess']))
												     {
												     $mess=$_GET['mess'];
												     echo "<span style='font-family:arial; color:#5FBE5F;'>".$mess."</span>";
												     }
												     ?>
											      </td></tr>
											      <tr>
													 <td>First Name</td>
													 <td colspan="2"><input type="text" name="fname" class="form" value="<?=$res['fname'];?>"/>
													 <input type="hidden" name="hd_id" value="<?=$res['slno'];?>"/>
													 </td>
											      </tr>
												  <tr>
													 <td>Last Name</td>
													 <td colspan="2"><input type="text" name="lname" class="form" value="<?=$res['lname'];?>"/></td>
											      </tr>
												  <tr>
													 <td>Location</td>
													 <td colspan="2"><input type="text" name="location" class="form" value="<?=$res['location'];?>"/></td>
											      </tr>
												   <tr>
													 <td>Emailid</td>
													 <td colspan="2"><input type="text" name="email" id="emailid" class="form" value="<?=$res['email'];?>" readonly/></td>
											      </tr>
												   <tr>
													 <td>Contact</td>
													 <td colspan="2"><input type="text" name="contact" id="contact" class="form" value="<?=$res['contact'];?>" onKeyPress="return numbersonly(event)"/></td>
											      </tr>
												   <tr>
													 <td>Qualification</td>
													 <td colspan="2"><textarea  name="qualify" class="form" ><?=$res['qualification'];?></textarea></td>
											      </tr>
												  <tr>
													<td>Upload Image</td>
													<td>
													<input type="file" name="imgg">
													</td>
													<td>
													<img src="../<?php echo $res['image']; ?>" width="100" height="100" />
													<input type="hidden" name="hd_oldimg" value="<?=$res['image'];?>"/>
													</td>
												  </tr>
											      <tr><td colspan="2">&nbsp;</td></tr>
											      <tr>
													 <td>&nbsp;</td>
													 <td><input type="submit" name="submit" class="button" value="Submit" /></td>
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
