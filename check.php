<?php
include_once("admin/function.php");
$uniquekey=$_POST['uniquekey'];
$password=md5(htmlentities($_POST['npwd'],ENT_QUOTES));
$pwd=md5(htmlentities($_POST['conpwd'],ENT_QUOTES));

$qwery=mysql_query("select * from `user_signin` where `unique_key`='$uniquekey'")or die(mysql_error());
if(mysql_num_rows($qwery)>0)
{
mysql_query("update `user_signin` set `password`='$password' where `unique_key`='$uniquekey'")or die(mysql_error());
$msg="Password generate successfully";
}
else if($password!=$pwd)
{
$msg=" Password should be match with Confirm Password";
}

else
{
$msg="Wrong unique key please try again.";
}
header("location:index.php?msg=$msg");
?>