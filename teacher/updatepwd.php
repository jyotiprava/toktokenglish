<?php
include_once("../admin/function.php");
$email=htmlentities($_POST['email'],ENT_QUOTES);
$cpwd=md5(htmlentities($_POST['cpwd'],ENT_QUOTES));
$npwd=md5(htmlentities($_POST['npwd'],ENT_QUOTES));
$conpwd=md5(htmlentities($_POST['conpwd'],ENT_QUOTES));


$query=mysql_query("select * from `teacher_login` where `email`='$email'")or die(mysql_error());
$res=mysql_fetch_array($query);


if($cpwd!=$res['password'])
{
    $msg='Current password is wrong.';
	header("location:changepwd.php?msg=$msg");
}
else if($npwd!=$conpwd)
{
$msg="New Password should be match with Confirm Password";
}
else{
    mysql_query("update `teacher_login` set `password`='$npwd' where `email`='$email'")or die(mysql_error());
    $msg='Password changed Successfully';
}
header("location:changepwd.php?msg=$msg");
?>
