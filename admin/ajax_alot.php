<?php
include_once("function.php");
$tid=$_GET['tid'];
$sid=$_GET['sid'];
$cid=$_GET['cid'];

mysql_query("insert into `alottable` set `s_id`='$sid',`t_id`='$tid',`c_id`='$cid'")or die(mysql_error());
echo "OK";
 $sqlteacher=mysql_query("select `fname`,`lname`,`email` from `teacher_login` where `slno`='$tid'");
 $resteacher=mysql_fetch_array($sqlteacher);
 $firstname1=$resteacher['fname'];
 $lastname1=$resteacher['lname'];
 $name1=$firstname1." ".$lastname1;
 $email=$resteacher['email'];
 
 $sqlstudent=mysql_query("select `firstname`,`lastname`,`email` from `user_signin` where `slno`='$sid'");
 $resstudent=mysql_fetch_array($sqlstudent);
 $firstname=$resstudent['firstname'];
 $lastname=$resstudent['lastname'];
 $name=$firstname." ".$lastname;
 $email1=$resstudent['email'];
 
  $sqlcourse=mysql_query("select `coursename` from `course` where `id`='$cid'");
 $rescourse=mysql_fetch_array($sqlcourse);
 $coursename=$rescourse['coursename'];
 
 $sqltime=mysql_query("select `time` from `preferred_time` where `s_id`='$sid' and `c_id`='$cid'");
 $restime=mysql_fetch_array($sqltime);
 $time=$restime['time'];
 
  $sqltime1=mysql_query("select `availtime` from `teacher_applied` where `teacher_id`='$tid' and `course`='$cid'");
 $restime1=mysql_fetch_array($sqltime1);
 $time1=$restime1['availtime'];
 
$to = $email;
$subject = "Student courses timing at Toktok English";

$message = "
<html>
<head>
<title>Student details to attend course  at Toktok English</title>
</head>
<body>
<p>Student details for courses  at Toktok English
<br/>
<table><tr><td>Name :</td><td>$name</td></tr><tr><td>Course :</td><td>$coursename</td></tr><tr><td>Time :</td><td>$time</td></tr></table>
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";

mail($to,$subject,$message,$headers);

$to1 = $email1;
$subject1 = "Your teacher courses timing at Toktok English";

$message1 = "
<html>
<head>
<title>Teacher details of your course at Toktok English</title>
</head>
<body>
<p>Teacher details of your course  at Toktok English
<br/>
<table><tr><td>Name :</td><td>$name1</td></tr><tr><td>Course :</td><td>$coursename</td></tr><tr><td>Time :</td><td>$time1</td></tr></table>
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers1 = "MIME-Version: 1.0" . "\r\n";
$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers1 .= 'From: <webmaster@example.com>' . "\r\n";

mail($to1,$subject1,$message1,$headers1);
?>