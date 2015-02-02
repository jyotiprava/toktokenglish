<?php
include_once("admin/function.php");

$course=htmlentities($_POST['course'],ENT_QUOTES);
$prtime=htmlentities($_POST['prtime'],ENT_QUOTES);

$qwery=mysql_query("select * from `preferred_time` where `s_id`='$_SESSION[sidval]' and `c_id`='$course'")or die(mysql_error());
$count=mysql_num_rows($qwery);

if($count==0)
{
    mysql_query("insert into `preferred_time` set `s_id`='$_SESSION[sidval]',`c_id`='$course',`time`='$prtime'")or die(mysql_error());
}
else
{
    mysql_query("update `preferred_time` set `time`='$prtime' where `s_id`='$_SESSION[sidval]' and `c_id`='$course'")or die(mysql_error());
}

$msg="Preffered time updated successfully";
header("location:course.php?msg=$msg");
?>