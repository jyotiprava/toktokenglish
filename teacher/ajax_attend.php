<?php
include_once("../admin/function.php");
$tech_id=$_SESSION['tidval'];
$courseid=$_GET['id'];
$sql=mysql_query("select * from `student_apply_course` where `course_id`='$courseid'");
$sqlclass=mysql_query("select * from `course` where `id`='$courseid'");
$resclass=mysql_fetch_array($sqlclass);
$numclass=$resclass['noclass'];
$time=mysql_query("select * from `preferred_time` where `c_id`='$courseid'");
$restime=mysql_fetch_array($time);
?>




<tr>
<td>Available Students</td>
<td>
<select class="form" name="student">
<?php
while($res=mysql_fetch_array($sql)){
$sid=$res['st_id'];
$sqlstudent=mysql_query("select * from `user_signin` where `slno`='$sid'");
while($resstudent=mysql_fetch_array($sqlstudent)){
?>
<option value="<?php echo $resstudent['slno'];?>"><?php echo $resstudent['firstname']." ".$resstudent['lastname'];?></option>
<?php
}
}
?>
</select>
</td>
</tr>|
<tr>
<td>Attendance Type</td>
<td>
<select class="form" name="student_type" onchange="return class_student();">
<option value="attend">Attend</option>
<option value="notattend">Not Attend</option>
</select>
</td>
</tr>

<!--datepicker start--->
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>

<!--datepicker end--->
<script type="text/javascript">
	$(function (){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
			
		});
	});
</script>