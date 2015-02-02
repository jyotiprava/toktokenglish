<?php
include_once("../admin/function.php");
is_teacher();
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
.greenimg
{
	background: green;
  color: #fff;
  cursor: pointer;
  font-weight:normal;
  padding-bottom: 2px;
    width: 30px;
height: 28px;
  float: left;
margin:5px;
border: 1px solid #fff;
}

.redimg
{
	background: red;
  color: #fff;
  cursor: pointer;
  font-weight:normal;
  padding-bottom: 2px;
    width: 30px;
height: 28px;
  float: left;
margin:5px;
border: 1px solid #fff;
}
.grayimg
{
	background:#efefef;
  color: #000;
  font-weight:normal;
  float: left;
  padding-bottom: 2px;
  width: 30px;
height: 28px;
margin:5px;
background-size:100% 100%;
border: 1px solid #dedede;
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

$('#divid'+ival).html("<input type='button' class='greenimg' value='"+ival+"'/>");
$('#hdival').val(ival);
$('.disabl').attr('disabled',true);
$('#attend').show();
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
<!--datepicker start-->
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
<!--datepicker end-->
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
									   Student Performance		
								</div>
								<div id="content2" style="min-height:350px;">
									   <div class="sub_content">
											  <form name="f" method="post" action="insert_studperformance.php">
													 
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
													 <td>Available Courses</td>
													 <td>
													 <select class="form"  onchange="return courseId(this.value);" name="course">
															<option>---SELECT COURSE---</option>
															<?php
															$qwery=mysql_query("select * from `course`");
															 while($res=mysql_fetch_array($qwery)){
															?>
															
															<option value="<?=$res['id']; ?>"><?=$res['coursename']?></option>
															<?php } ?>
													 </select>
													 <input type="hidden" name="hdval" value="<?php echo $_SESSION['tidval'];?>"/>
													 </td>
											      </tr>
											      <tbody id="newrow"></tbody>
												  <tbody id="newrow1"></tbody>

											      <tr>
													 <td>Message</td>
													 <td><textarea name="message" class="form" ></textarea></td>
											      </tr>
												   <tr>
													 <td>Feedback</td>
													 <td><textarea name="feedback" class="form" ></textarea></td>
											      </tr>
												  <tr>
													 <td>Performance</td>
													 <td>
													 <select name="pronounciation">
													 <option>Pronounciation</option>
													 <?php
													 for($i=1;$i<=10;$i++)
													 {
													 ?>
													 <option value="<?php echo $i;?>"<?php
													 $sqll=mysql_query("select * from `student_performance` where `course_id`='$courseid' and `stud_id`='$sid' and `teacher_id`='$tech_id'");
													 $row=mysql_fetch_array($sqll);
													 ?>><?php echo $i;?></option>
													 <?php
													 }
													 ?>
													 </select>
													  <select name="vocab">
													 <option>Vocab</option>
													 <?php
													 for($i=1;$i<=10;$i++)
													 {
													 ?>
													 <option value="<?php echo $i;?>"><?php echo $i;?></option>
													 <?php
													 }
													 ?>
													 </select>
													  <select name="listening">
													 <option>Listening</option>
													 <?php
													 for($i=1;$i<=10;$i++)
													 {
													 ?>
													 <option value="<?php echo $i;?>"><?php echo $i;?></option>
													 <?php
													 }
													 ?>
													 </select>
													 <select name="grammer">
													 <option>Grammer</option>
													 <?php
													 for($i=1;$i<=10;$i++)
													 {
													 ?>
													 <option value="<?php echo $i;?>"><?php echo $i;?></option>
													 <?php
													 }
													 ?>
													 </select>
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
