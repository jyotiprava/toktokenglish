<?php
include_once("../admin/function.php");
$fname=htmlentities($_POST['fname'],ENT_QUOTES);
$lname=htmlentities($_POST['lname'],ENT_QUOTES);
$location=htmlentities($_POST['location'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$contact=htmlentities($_POST['contact'],ENT_QUOTES);
$qualify=htmlentities($_POST['qualify'],ENT_QUOTES);
$hd_id=htmlentities($_POST['hd_id'],ENT_QUOTES);

$image=$_FILES['imgg']['name']; 
if($image=='')
{
$filename=$_POST['hd_oldimg'];
 }
else
{
$ext1=end(explode(".", $_FILES["imgg"]["name"]));

if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf")

         {
                                    $folder="admin/upload/";
						      $folder1="../admin/upload/";
                                                $filename = $folder.time().$image;
                                               $filename1 = $folder1.time().$image;
                                                $copied = copy($_FILES['imgg']['tmp_name'], $filename1); 
}	
}	


    mysql_query("update `teacher_login` set `fname`='$fname',`lname`='$lname',`email`='$email',`qualification`='$qualify',`location`='$location',`contact`='$contact',`image`='$filename' where `slno`='$hd_id'")or die(mysql_error());
    $msg='Successfully Updated';
	header("location:home.php?msg=$msg");
?>
