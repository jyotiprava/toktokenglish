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
<td>No of classes</td>
<td>
<?php
$sqll=mysql_query("select * from `student_performance` where `course_id`='$courseid' and `stud_id`='$sid' and `teacher_id`='$tech_id'");
//echo "select * from `student_performance` where `course_id`='$courseid' and `stud_id`='$sid' and `teacher_id`='$tech_id'";
$num=mysql_num_rows($sqll);
if($num==0){
for($i=1;$i<=$numclass;$i++){
?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $i;?>" id="btn<?php echo $i;?>" class="grayimg" onclick="return getcolor(<?php echo $i;?>);"/>
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
/*foreach($ext as $extval)
{
if($extval!=''){*/
?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $class;?>" class="<?=$classc;?>"/>
</div>
<?php
/*}
}*/
}
$last=end($ext);
for($i=$last+1;$i<=$numclass;$i++){
?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $i;?>" id="btn<?php echo $i;?>" onclick="return getcolor(<?php echo $i;?>);" class="grayimg"/>
</div>
<?php
}
}
?>
<input type="hidden" name="no_class" id="hdival"/>
</td>
</tr>

<tr style="display: none;" id="attend">
<td>Attendance Type</td>
<td>
<select class="form" name="student_type">
<option value="attend">Attend</option>
<option value="notattend">Not Attend</option>
</select>
</td>
</tr>
<!--datepicker start-->
<script type="text/javascript">
	$(function (){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
			
		});
	});
</script>
<!--datepicker end-->
<tr>
<td>Next Class</td>
<td><input type="text" name="next_date"  name="rpt" size="12" id="inputField" class="form"/></td>
</tr>

<tr>
<td>Next Class Time</td>
<td><input type="text" name="next_time" class="form" value="<?php echo $restime['time'];?>"/></td>
</tr>
