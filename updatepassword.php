<?php
include_once("admin/function.php");
$email=$_SESSION['semail'];
$cpwd=md5(htmlentities($_POST['cpwd'],ENT_QUOTES));
$npwd=md5(htmlentities($_POST['npwd'],ENT_QUOTES));
$conpwd=md5(htmlentities($_POST['conpwd'],ENT_QUOTES));

//echo $cpwd;
//echo "select * from `user_signin` where `email`='$email'";
$query=mysql_query("select * from `user_signin` where `email`='$email'")or die(mysql_error());
$res=mysql_fetch_array($query);
//echo $res['password'];


if($cpwd!=$res['password'])
{
    $msg='Current password is wrong.';
	header("location:mypage.php?msg=$msg");
}
else if($npwd!=$conpwd)
{
$msg="New Password should be match with Confirm Password";
}
else{
    mysql_query("update `user_signin` set `password`='$npwd' where `email`='$email'")or die(mysql_error());
    $msg='Password changed Successfully';
}
header("location:changepassword.php?msg=$msg");
?>
