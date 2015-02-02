<?php
include_once("../admin/function.php");

$course=$_GET['course'];
$st=$_GET['st'];
$en=$_GET['en'];
$title=$_GET['title'];
$start=$_GET['start'];
$end=$_GET['end'];

$tid=$_SESSION['tidval'];

$qwery=mysql_query("select * from `teacher_applied` where `teacher_id`='$tid' and `course`='$course' and `availtime`='$title'");
if(mysql_num_rows($qwery)>0)
{
    mysql_query("update `teacher_applied` set `start`='$st',`end`='$en',`startdb`='$start',`enddb`='$end' where `teacher_id`='$tid' and `course`='$course' and `availtime`='$title'")or die(mysql_error());
}
else
{
mysql_query("insert into `teacher_applied` set `teacher_id`='$tid',`course`='$course',`availtime`='$title',`start`='$st',`end`='$en',`startdb`='$start',`enddb`='$end'")or die(mysql_error());
}
echo "OK";
?>