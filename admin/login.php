<?php
include_once("function.php");
$uid=htmlentities($_POST['username'],ENT_QUOTES);
$pwd=md5(htmlentities($_POST['password'],ENT_QUOTES));

//echo "select * from `admin_login` where `userid`='$uid' and `password`='$pwd'";
$sel=mysql_query("select * from `admin_login` where `userid`='$uid' and `password`='$pwd'")or die(mysql_error());
if(mysql_num_rows($sel)>0)
{
    $result=mysql_fetch_array($sel);
    header("location:postcourse.php");
	
}
else
{
    $msg='Invalid username or password.';
    header("location:index.php?msg=$msg");
}
?>