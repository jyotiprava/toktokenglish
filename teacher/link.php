<?php
include_once("../admin/function.php");

if(isset($_POST['submit']))
{
$email=htmlentities($_POST['email']);
$emailid=mysql_query("select * from `teacher_login` where `email`='$email'") or die(mysql_error());
if(mysql_num_rows($emailid)>0)
{

$random=md5($email.'---'.time().'---'.hello);

mysql_query("update `teacher_login` set `unique_key`='$random' where `email`='$email'")or die(mysql_error());
echo "update `teacher_login` set `unique_key`='$random' where `email`='$email'";
$to=$email;
$subject = "forgot password";
$lnk = "http://www.toktokenglish.com/demo/teacher/frgtpwd.php?unique=$random";
$message = "Click the link to get the password  http://www.toktokenglish.com/demo/teacher/frgtpwd.php?unique=$random";


$headers .= 'From: <toktokenglish@gmail.com>';

mail($to,$subject,$message,$headers);
 
$msg="Please check your mail to generate new password.";

}
else
{
$msg="Please enter valid email address";
}
}


header("location:forgotpassword.php?msg=$msg");
?>