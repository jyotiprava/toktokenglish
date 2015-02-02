<?php
include_once("function.php");
$username=htmlentities($_POST['username'],ENT_QUOTES);
$cpwd=md5(htmlentities($_POST['cpwd'],ENT_QUOTES));
$npwd=md5(htmlentities($_POST['npwd'],ENT_QUOTES));
$conpwd=md5(htmlentities($_POST['conpwd'],ENT_QUOTES));

$query=mysql_query("select * from `admin_login` where `userid`='$username'")or die(mysql_error());
$res=mysql_fetch_array($query);

if($cpwd!=$res['password'])
{
    $msg='Current password is wrong.';
}
else if($npwd!=$conpwd)
{
$msg="New Password should be match with Confirm Password";
}
else{
    mysql_query("update `admin_login` set `password`='$npwd' where `userid`='$username'")or die(mysql_error());
    $msg='Password changed Successfully';
}
header("location:changepwd.php?msg=$msg");
?>
