<?php
include_once("admin/function.php");
if(isset($_POST['updatebtn']))
{
$email=htmlentities($_POST['email'],ENT_QUOTES);
$phone=htmlentities($_POST['phone'],ENT_QUOTES);

mysql_query("update `user_signin` set `email`='$email',`phone`='$phone' where `slno`='$_SESSION[sidval]'") or die(mysql_error());
$msg="Updated Successfully";
}
header("location:mypage.php?msg=$msg");
?>