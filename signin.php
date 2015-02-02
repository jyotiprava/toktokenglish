<?php
include_once("admin/function.php");
if(isset($_POST['submit']))
{
$firstname=htmlentities($_POST['fname'],ENT_QUOTES);
$lastname=htmlentities($_POST['lname'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$password=md5(htmlentities($_POST['password'],ENT_QUOTES));
$phone=htmlentities($_POST['phone'],ENT_QUOTES);
$message=htmlentities($_POST['msg'],ENT_QUOTES);

$sel=mysql_query("select * from `user_signin` where `email`='$email'")or die(mysql_error());
$nmbr=mysql_num_rows($sel);
if($nmbr==0){
mysql_query("insert into `user_signin` set `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`phone`='$phone',`message`='$message'")or die(mysql_error());
 
 $msg="successfully inserted";
 
 $slno=mysql_insert_id();
 $to = $email;
$subject = "Account details for $firstname  $lastname at Toktok english";
$message = "
<html>
<head>
<title>Account details for $firstname  $lastname at Toktok english</title>
</head>
<body>
<p>Dear $firstname  $lastname,Thank you for registering for Toktok english. You may now log in by clicking this link:http://toktokenglish.com/demo/activate.php?slno=$slno

This will verify your account and log you into the site. In the future you will be able to log in using the username and password that you created during registration.
<br/>
--
<br/>
Toktok english team</p>
</body>
</html>
";
 
header("Location:index.php?msg=$msg");
}
else
{
$message="Email id is already exist.";
header("Location:index.php?msg=$message");

}
}
?>



