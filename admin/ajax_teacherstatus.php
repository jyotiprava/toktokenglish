<?php
include_once("function.php");
$val=$_GET['id'];
$slno=$_GET['uid'];
echo "update `teacher_login` set `status`='$val' where `slno`='$slno'";
mysql_query("update `teacher_login` set `status`='$val' where `slno`='$slno'")or die(mysql_error());
?>