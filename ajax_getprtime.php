<?php
include_once("admin/function.php");
$cid=$_GET['cid'];

$qwery=mysql_query("select * from `preferred_time` where `s_id`='$_SESSION[sidval]' and `c_id`='$cid'")or die(mysql_error());
$count=mysql_num_rows($qwery);

if($count>0)
{
    $res=mysql_fetch_array($qwery);
    echo $res['time'];
}
?>