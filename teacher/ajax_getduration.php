<?php
include_once("../admin/function.php");
$cid=$_GET['id'];
//echo "select * from `course` where `id`='$cid'";
$qwery=mysql_query("select * from `course` where `id`='$cid'")or die(mysql_error());
$res=mysql_fetch_array($qwery);
echo $res['coursename'];
?>