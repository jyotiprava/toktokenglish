<?php
include_once("../admin/function.php");

$uniquekey=$_POST['uniquekey'];
$password=md5(htmlentities($_POST['pwd'],ENT_QUOTES));
$pwd=md5(htmlentities($_POST['pwd2'],ENT_QUOTES));
$qwery=mysql_query("select * from `teacher_login` where `unique_key`='$uniquekey'")or die(mysql_error());
if(mysql_num_rows($qwery)>0)
{
mysql_query("update `teacher_login` set `password`='$password' where `unique_key`='$uniquekey'")or die(mysql_error());

$msg="Password generate successfully";
}

header("location:index.php?msg=$msg");
?>