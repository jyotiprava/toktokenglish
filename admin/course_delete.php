<?php
include_once("function.php");
$id=$_GET['id'];
mysql_query("delete from `course` where `id`='$id'")or die(mysql_error());
$msg="Course Deleted Successfully.";
header("location:postcourse.php?msg=$msg");
?>