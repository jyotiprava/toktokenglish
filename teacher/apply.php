<?php
include_once("../admin/function.php");
//isset($_SESSION['tidval']);
?>
<html>
<head>
<title>..::TOKTOKENGLISH::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

<link href="style1.css" rel="stylesheet" type="text/css" />
<link href="responsiv1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.min.js"></script>
<style>

</style>
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
<!--------------------------calender--------------------------------->
<link href='css/fullcalendar.css' rel='stylesheet' />
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: new Date(),
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
			      var check = moment(start).format('YYYY-MM-DD');
			      var today = moment(new Date()).format('YYYY-MM-DD');
			      if(check < today)
			      {
					     alert("You cant add previous date. Please choose a future date.");
					       // Previous Day. show message if you want otherwise do nothing.
					     // So it will be unselectable
			      }
			      else
			      {
				     var title = prompt('Message:');
					     var eventData;
					     if (title) {
						     eventData = {
							     title: title,
							     start: start,
							     end: end
						     };
						     
						      var st = moment(start).format('YYYY-MM-DD HH:mm:ss');
					              var en = moment(end).format('YYYY-MM-DD HH:mm:ss');
						      
						      var course=$('#course').val();
						      
						      $.ajax({url:"ajax_teacherap.php?course="+course+"&st="+st+"&en="+en+"&title="+title+"&start="+start+"&end="+end,
							     success:function(results)
							     {
									   
							     }
							    
						      });
						      
						     $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					     }
					     $('#calendar').fullCalendar('unselect');
			      }
			      
				
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			 events: [
				{
					title: 'avail time',
					start: '2015-02-01 12:00:00',
					end: '2015-02-01 15:30:00'
				}
			]
		});
		
	});
	
	/*var eventData1={
	                title: 'avail time2',
			start: '1422792000000',
			end: '1422804600000'
			};
		    
	$('#calendar').fullCalendar('addEvent', eventData1 );*/
	      
	

</script>
<style>
	       #calendar {
		max-width: 900px;
		margin: 0 auto;
	}
</style>
<!--------------------------calender--------------------------------->

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
									Apply For Course		
								</div>
								<div id="content2" style="min-height:350px;">
									   <div class="sub_content">
											 		 
											  <table>
											      
											      <tr><td>
													 <?php
												     if(isset($_GET['msg']))
												     {
												     $mess=$_GET['msg'];
												     echo "<span style='font-family:arial; color:#5FBE5F;'>".$mess."</span>";
												     }
												     ?>
											      </td>
												  </tr>
											      <tr>
													 <td>Available Course</td>
													 <td>
													 <select class="form" name="course" id="course">
															<option>---SELECT COURSE---</option>
															<?php
															
																       $crs=mysql_query("select * from `course`")or die(mysql_error());
																       while($res1=mysql_fetch_array($crs)){
															 ?>
															 <option value="<?=$res1['id']; ?>"><?=$res1['coursename']?></option>
															 <?php } ?>
													 </select>
													 
													 </td>
											      </tr>
											      <tbody id="newrow">
													 
											      </tbody>
											      <tr>
													 <td>
															&nbsp;
													 </td>
											      </tr>
											      <tr>
													 <td>Available Time </td>
													 <td><!--<span id="dur" style="color: red"></span> --></td>
											      </tr>
											      <tr><td>&nbsp;</td></tr>
											      <tr>
													 <td colspan="2" align="center">
													 <div id='calendar'></div>
													 </td>
											      </tr>
											      <tr><td>&nbsp;</td></tr>
											      <tr style="display: none;">
													 <td>&nbsp</td>
													 <td><input type="submit" name="submit" class="button" value="Apply" /></td>
											      </tr>
											  </table>
											  
											  
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
