<?php
include_once("function.php");
$val=$_GET['id'];
$slno=$_GET['uid'];
//echo "update `user_signin` set `status`='$val' where `slno`='$slno'";
mysql_query("update `user_signin` set `status`='$val' where `slno`='$slno'")or die(mysql_error());
?>