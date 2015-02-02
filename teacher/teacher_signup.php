<?php
include_once("../admin/function.php");
if(isset($_POST['registerbtn'])){
$fname=htmlentities($_POST['fname'],ENT_QUOTES);
$lname=htmlentities($_POST['lname'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$password=md5(htmlentities($_POST['password1'],ENT_QUOTES));
$quali=htmlentities($_POST['quali'],ENT_QUOTES);
$location=htmlentities($_POST['location'],ENT_QUOTES);
$contact=htmlentities($_POST['contact'],ENT_QUOTES);

$qwery=mysql_query("select `email` from `teacher_login` where `email`='$email'")or die(mysql_error());
if(mysql_num_rows($qwery)>0)
{
    $msg='This Emailid allready exist.';
    header("location:index.php?msg=$msg");
}
else{
   // echo "insert into `teacher_login` set `fname`='$fname',`lname`='$lname',`email`='$email',`password`='$password',`location`='$location',`contact`='$contact',`qualification`='$quali'";
	$qwe=mysql_query("insert into `teacher_login` set `fname`='$fname',`lname`='$lname',`email`='$email',`password`='$password',`location`='$location',`contact`='$contact',`qualification`='$quali'")or die(mysql_error());
	if($qwe){
	$msg="successfully signed up.You can login now!!!";
	}
	else{
	$msg="Please try Again!";
	}
    }

}
header("location:index.php?msg=$msg");
?>
