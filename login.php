<?php
include_once("admin/function.php");
$email=htmlentities($_POST['email'],ENT_QUOTES);
$password=md5(htmlentities($_POST['password'],ENT_QUOTES));

//echo "select * from `user_signin` where `email`='$email' and `password`='$password'";
$sel=mysql_query("select * from `user_signin` where `email`='$email' and `password`='$password'")or die(mysql_error());
if(mysql_num_rows($sel)>0)
{
 $res=mysql_fetch_array($sel);
 $_SESSION['sidval']=$res['slno'];
 $_SESSION['sname']=$res['firstname'];
    $_SESSION['semail']=$email;
    header("location:mypage.php");
}
else
{
    $msg='Invalid username or password.';
    header("location:index.php?msg=$msg");
}
?>