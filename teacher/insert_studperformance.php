<?php
include_once("../admin/function.php");
$course=htmlentities($_POST['course'],ENT_QUOTES);
$student=htmlentities($_POST['student'],ENT_QUOTES);
$no_class=$_POST['no_class'];
$message=htmlentities($_POST['message'],ENT_QUOTES);
$feedback=htmlentities($_POST['feedback'],ENT_QUOTES);
$pronounciation=htmlentities($_POST['pronounciation'],ENT_QUOTES);
$vocab=htmlentities($_POST['vocab'],ENT_QUOTES);
$listening=htmlentities($_POST['listening'],ENT_QUOTES);
$grammer=htmlentities($_POST['grammer'],ENT_QUOTES);
$hdteachval=htmlentities($_POST['hdval'],ENT_QUOTES);
$next_class=$_POST['next_date'];
$typee=htmlentities($_POST['student_type'],ENT_QUOTES);
$time=$_POST['next_time'];
$date=date("Y-m-d");
if($no_class!='')
{
//echo "insert into `student_performance` set `course_id`='$course',`stud_id`='$student',`class_no`='$no_class',`message`='$message',`feedback`='$feedback',`pronounciation`='$pronounciation',`vocab`='$vocab',`listening`='$listening',`grammer`='$grammer',`teacher_id`='$hdteachval',`date`='$date',`next_class`='$next_class',`time`='$time'";
mysql_query("insert into `student_performance` set `course_id`='$course',`stud_id`='$student',`class_no`='$no_class',`message`='$message',`feedback`='$feedback',`pronounciation`='$pronounciation',`vocab`='$vocab',`listening`='$listening',`grammer`='$grammer',`teacher_id`='$hdteachval',`date`='$date',`next_class`='$next_class',`time`='$time',`class_type`='$typee'");
$msg="Succesfully added";
}
else
{
$msg="Please check class";
}
header("location:student_performance.php?mess=$msg");
?>