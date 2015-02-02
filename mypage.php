<?php
include_once("admin/function.php");
is_student();
$stud_id=$_SESSION['sidval'];
$sqlcourse=mysql_query("select * from `student_apply_course` where `st_id`='$stud_id'");
$rescourse=mysql_fetch_array($sqlcourse);
$sql=mysql_query("select * from `student_performance` where `stud_id`='$stud_id' and `course_id`='$rescourse[course_id]' ORDER BY  `date` DESC");
$row1=mysql_fetch_array($sql);
$courseid=$row1['course_id'];
$coursename=mysql_query("select * from `course` where `id`='$courseid'");
$rescname=mysql_fetch_array($coursename);
$time=mysql_query("select `time` from `preferred_time` where `c_id`='$row1[course_id]'");
$restime=mysql_fetch_array($time);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <title>..::TOKTOKENGLISH::..</title>
<link href="style1.css" rel="stylesheet" type="text/css">
<link href="responsiv1.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/data.js"></script>
<script src="js/exporting.js"></script>
    <script type="text/javascript">
        $(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'column'
	    
        },
	plotBackgroundColor: 'rgba(255, 255, 255, .9)',
        title: {
            text: ''
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
    </script>
<script>
$(document).ready(function(){
  $("#imgid").click(function(){
    $(".log_out").slideToggle('');
  });
});
function remainclass(cursval)
{
$.ajax({
	       url:"ajax_remainclass.php?id="+cursval,
	       success:function(result){
		    var x=result.split("|");
		   var x1=x[0];
		   var x2=x[1];
		  $('#spid').html(x1);
		  $('#classid').html(x2);
	       }
	       });
}
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
.form
{
width: 250px;
background-color: #FFF;
border: 1px solid #CCC;
box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
height: 30px;
font-size: 14px;
color: #000;
vertical-align: middle;
border-radius: 4px;
padding: 5px;
}
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
.link1{
    background: rgb(249,198,103); /* Old browsers */
background: -moz-linear-gradient(top, rgba(249,198,103,1) 0%, rgba(247,150,33,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(249,198,103,1)), color-stop(100%,rgba(247,150,33,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(249,198,103,1) 0%,rgba(247,150,33,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(249,198,103,1) 0%,rgba(247,150,33,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(249,198,103,1) 0%,rgba(247,150,33,1) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(249,198,103,1) 0%,rgba(247,150,33,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9c667', endColorstr='#f79621',GradientType=0 ); /* IE6-9 */ color:#333;
}
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
  
 
 <?php include_once('menubar.php');?>
  <div id="content_bar">
  		<div id="content_box">
        		
                <div id="content_right">
                	<div id="content_rightbox1">
								<h2 class="head3" style="margin-bottom:5px;">
													Please choose your course
													<select class="form" onchange="return remainclass(this.value);">
													<option>---Select---</option>
													<?php
													$sqlcourse1=mysql_query("select * from `student_apply_course` where `st_id`='$stud_id'");
													while($rescourse1=mysql_fetch_array($sqlcourse1)){
													$coursename=mysql_query("select `coursename`,`id` from `course` where `id`='$rescourse1[course_id]'");
													while($rows=mysql_fetch_array($coursename)){
													?>
													<option value="<?php echo $rows['id'];?>" <?php if($courseid==$rows['id']) echo 'selected';?>><?php echo $rows['coursename'];?></option>
													<?php
													}
													}
													?>
													</select>
													
								</h2>
								<span id="spid" style="font-family: Arial, Helvetica, sans-serif;">
								
								<!--<span style="font-weight:bold;color: #1f4e79;">Your Course :</span>
								<span style="font-weight:bold;color: #e16428;"><?php echo $rescname['coursename'];?></span>-->
								
								<br />
                                        <br />
                                        <span style="font-weight:bold;color: #1f4e79;">Your Next Class:</span>
                                        <br /><br />
                                        <span style="font-weight:bold;color: #1f4e79;">Date</span>
                                        <span style="font-size:20px;padding: 2px; padding-left: 7px; padding-right: 7px; border-radius:5px; -moz-border-radius:5px;color:#fff;background:#911919; font-weight:normal;">
										<?php
										$date=$row1['next_class'];
										$nextdate=date('d . m . Y', strtotime($date));
										echo $nextdate;
										?>
										</span>
					<br/><br/>
                                        <span style="font-weight:bold; color: #1f4e79;"> Time</span>
                                        <span style="font-size:20px;padding: 2px; padding-left: 7px; padding-right: 7px; border-radius:5px; -moz-border-radius:5px; background:#911919;color:#fff; font-weight:normal;"><?php echo $restime['time'];?></span>
								</h2>		
								<h2 class="head3" style=" margin-top:15px;">
                                		Message from your Teacher: <?php echo $row1['message'];?>
                                        <br />
  
                                </h2>
								
				
			<div id="container" style="width:100%; height: 400px; float: left;margin-top:15px;border: 1px solid #ccc;">
			
			</div>  
                                
            </div>
			
<table id="datatable" style="display: none;">
	<thead>
		<tr>
			<th></th>
			<th>Performance Meter</th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Pronunciation</th>
			<td><?php echo $row1['pronounciation'];?></td>
			
		</tr>
		<tr>
			<th>Vocab</th>
			<td><?php echo $row1['vocab'];?></td>
			
		</tr>
		<tr>
			<th>Listening</th>
			<td><?php echo $row1['listening'];?></td>
			
		</tr>
		<tr>
			<th>Grammar</th>
			<td><?php echo $row1['grammer'];?></td>
			
		</tr>
		
	</tbody>
</table>
</span>
                        <div id="content_rightbox2">
                        		<img src="images/add.jpg"  width="100%"/>
                        		<div class="student_box" style="margin-top:20px;">
                                		Congratulations?!! You are the Student of the Week.. Share
                                </div>
                        </div>
						<div id="content_rightbox2">
                        		<div class="student_box" style="margin-top:20px;height:100px;">
								<span id="classid">
                                		<?php
										

$sqll=mysql_query("select * from `student_performance` where `course_id`='$rescourse[course_id]' and `stud_id`='$stud_id' and `teacher_id`='$row1[teacher_id]'");
$num=mysql_num_rows($sqll);
$sqlclass=mysql_query("select * from `course` where `id`='$rescourse[course_id]'");
$resclass=mysql_fetch_array($sqlclass);
$numclass=$resclass['noclass'];
if($num==0){
for($i=1;$i<=$numclass;$i++){
?>
<div id="divid<?php echo $i;?>" style="width:25px; height:auto; float:left;">
<input type="button" value="<?php echo $i;?>" style="border:none;"/>
</div>
<?php
}
}
else
{
while($row=mysql_fetch_array($sqll)){
$class=$row['class_no'];
$ext=explode(" ",$class);
if($row['class_type']=='attend')
{
    $classc='greenimg';
}
else
{
    $classc='redimg';
}
?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $class;?>" class="<?=$classc;?>"/>
</div>
<?php
}
$last=end($ext);
for($i=$last+1;$i<=$numclass;$i++){
?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $i;?>" class="grayimg"/>
</div>
<?php
}
}
?>
</span>
                                </div>
                        </div>
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
