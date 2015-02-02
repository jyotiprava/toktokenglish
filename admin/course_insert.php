<?php
include_once("function.php");
$coursename=htmlentities($_POST['coursename'],ENT_QUOTES);
$noclass=htmlentities($_POST['noclass'],ENT_QUOTES);
$time=htmlentities($_POST['time'],ENT_QUOTES);
$fee=htmlentities($_POST['fee'],ENT_QUOTES);
$description=htmlentities($_POST['description'],ENT_QUOTES);
$date=date('Y-m-d');


mysql_query("insert into `course` set `coursename`='$coursename',`noclass`='$noclass',`time`='$time',`fee`='$fee',`description`='$description',`date`='$date'")or die(mysql_error());

$msg="Inserted Successfully";
header("location:postcourse.php?msg=$msg");
?>