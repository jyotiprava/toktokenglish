<?php
include_once("../admin/function.php");
if(isset($_POST['submit'])){
$tid=$_SESSION['tidval'];

$dur=htmlentities($_POST['timedur'],ENT_QUOTES);

foreach($_POST['course'] as $key=>$value)
{
    $course=htmlentities($_POST['course'][$key],ENT_QUOTES);
    $qwery=mysql_query("select * from `teacher_applied` where `teacher_id`='$tid' and `course`='$course'")or die (mysql_error());
    if(mysql_num_rows($qwery)==0){
       $qwe=mysql_query("insert into `teacher_applied` set `teacher_id`='$tid',`course`='$course',`availtime`='$dur'") or die (mysql_error()); 
    }

}


//$fees=htmlentities($_POST['fees'],ENT_QUOTES);


if($qwe){
$msg="successfully added";
}
else{
$msg="Please try Again!";
}
}
header("location:home.php?msg=$msg");
?>
