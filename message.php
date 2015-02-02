<?php
include_once("admin/function.php");
is_student();
$stud_id=$_SESSION['sidval'];
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
		  $('#spid').html(result);
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
.link5{
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
								
								<h2 class="head3" style="border-bottom:2px solid #dd6a2a; height:25px; font-size:20px;">
                                        Your Messages From Your Teacher:
								</h2>
															
								
							<?php
								$sqlcourse=mysql_query("select * from `student_apply_course` where `st_id`='$stud_id'");
								while($rescourse=mysql_fetch_array($sqlcourse)){
								$sql=mysql_query("select * from `student_performance` where `stud_id`='$stud_id' and `course_id`='$rescourse[course_id]'");
								while($row=mysql_fetch_array($sql)){
								$coursename=mysql_query("select `coursename` from `course` where `id`='$row[course_id]'");
								$rowcourse=mysql_fetch_array($coursename);
								$teacher=mysql_query("select `fname`,`lname` from `teacher_login` where `slno`='$row[teacher_id]'");
								$rowteacher=mysql_fetch_array($teacher);
								?>		
							<div class="message_box">
									<h2 class="head3" style=" margin-top:5px; margin-left:5px; font-size:16px; line-height:1.4;">
											Course : <span style="color:#e16428; font-weight:normal;"><?php echo $rowcourse['coursename'];?></span>
											<br />
											Teacher : <span style="color:#e16428; font-weight:normal;"><?php echo $rowteacher['fname']." ".$rowteacher['lname'];?></span>
											<br/>
											Class : <span style="color:#e16428; font-weight:normal;"><?php echo $row['class_no'];?></span>
											<br/>
											Message : <span style="color:#e16428; font-weight:normal;"><?php echo $row['message'];?></span>
									</h2>		
							</div>  
							<?php
								}
								}
							?>      
					</div>

                        <div id="content_rightbox2">
                        		<img src="images/add.jpg" width="100%"  />
                        		<div class="student_box" style="margin-top:20px;">
                                		Congratulations?!! You are the Student of the Week.. Share
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
