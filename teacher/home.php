<?php
include_once("../admin/function.php");
is_teacher();
$email=$_SESSION['temail'];
$sqlteacher=mysql_query("select * from `teacher_login` where `email`='$email'");
$resteacher=mysql_fetch_array($sqlteacher);
$course=mysql_query("select * from `teacher_applied` where `teacher_id`='$_SESSION[tidval]'");
$num_course=mysql_num_rows($course);
$student=mysql_query("SELECT * FROM `student_apply_course` WHERE `course_id` in (select `course` from `teacher_applied` where `teacher_id`='$_SESSION[tidval]')");
$num_student=mysql_num_rows($student);

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

<script type="text/javascript">
function courseId(var1) {
$.ajax({
	       url:"ajax_getduration.php?id="+var1,
	       success:function(result){
	             
	      // $('#dur').html(result);
	       $('#newrow').append('<tr><td>'+result+'<input type="hidden" name="course[]" value="'+var1+'" /></td><td onclick="$(this).parent().remove();" style="cursor:pointer;">Remove</td></tr>');	
	       }
	       });
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
						
						 <div class="profilebox">
							    <div class="profileimg" style="position: relative;">
								<?php
								if($resteacher['image']==''){
								?>
								<img src="img/profilepic.png"/>
								<?php
								}
								else{
								?>
									<img src="../<?=$resteacher['image']; ?>"/>
									<?php
									}
									?>
									<a href="edit_profile.php?tid=<?=$_SESSION['tidval'];?>">
									<img src="img/editpic.png" style="width:20px;position: absolute; z-index:9; top:5px; right:5px;" />
									</a>
							    </div>
							    <div class="profilecontent">
							        <div class="profileinfobox">
									<h3><?=$resteacher['fname']." ".$resteacher['lname'];?></h3>
									<p class="text">
									   <img src="img/location.png" style="float: left; margin-right: 15px;" /><?=$resteacher['location'];?><br/>
									    <img src="img/email.png" style="width:20px;float: left; margin-right: 15px;margin-top: 5px;" /><?=$email;?><br/>
									   <img src="img/call.png" style="width:20px;float: left; margin-right: 15px;margin-top: 5px;" /><?=$resteacher['contact'];?>
									</p>   
								</div>
								<div class="profiledatabox">
							            <div class="profiledata">
									   Total Courses<br/>
									  <span style="font-size:16px;color: #000;"><?=$num_course;?></span> 
								    </div>
								    <div class="profiledata" style="border: none;">
									   Total Students<br/>
									  <span style="font-size:16px; color: #000;"><?=$num_student;?></span> 
								    </div>
								</div>
									
							    </div>
					         </div>
						 
						<div id="content1">
								<div class="head2">
									All Students Information		
								</div>
								<div id="content2" style="min-height:350px;">
									   <div class="sub_content">
											  
											 
											  <form name="f" method="post" action="teacher_application.php">
													 
											  <table class="table1">
											      <tr>
													 <th>Name of Student</th>
													 <th>Applied Courses</th>
											      </tr>
												  <?php
												  while($row=mysql_fetch_array($student)){
												  $studname=mysql_query("select * from `user_signin` where `slno`='$row[st_id]'");
												  $rowstud=mysql_fetch_array($studname);
												  $coursename=mysql_query("select * from `course` where `id`='$row[course_id]'");
												  $rowcourse=mysql_fetch_array($coursename);
												  ?>
											      <tr>
													 <td><?=$rowstud['firstname']." ".$rowstud['lastname'];?></td>
													 <td><?=$rowcourse['coursename'];?></td>
											      </tr>
											     <?php
												 }
												 ?>
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
