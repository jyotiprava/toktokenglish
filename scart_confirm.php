<?php
include_once('admin/function.php');
$courseid=$_GET['id'];
$qwe=mysql_query("select `fee` from `course` where `id`='$courseid'")or die(mysql_error());
$res=mysql_fetch_array($qwe);

$sqlcourse=mysql_query("select * from `student_apply_course` where `st_id`='$_SESSION[sidval]' and `course_id`='$courseid'");
$num=mysql_num_rows($sqlcourse);
if($num==0){
mysql_query("insert into `student_apply_course` set `st_id`='".$_SESSION['sidval']."',`course_id`='$courseid',`st_email`='".$_SESSION['semail']."'")or die(mysql_error());
}
else
{
$msg="Already Applied for this course";
header("location:allcourse.php?mess=$msg");
}

$idd=mysql_insert_id();
$email=$_SESSION['semail'];

$paypalaccount='sukalyan.ds@gmail.com';

$mSiteURL ="http://toktokenglish.com/demo/";
$mSiteTitle = "Toktokenglish";

$_cost = 25;
$b_desc = "Toktokenglish";		

/*-- Site Currency*/
$mCurrency =  "USD";
$paypal_currency_code =  "USD";

$pre_set_promo =  "promo100%";
$business =  $paypalaccount;

$sandbox = "sandbox.";

$payaltest = true;

//$ip_address = $_SERVER['REMOTE_ADDR']; // customer IP address
$amount=$res['fee'];
$_SESSION['price']=$amount;
$ORDER_ID=$email.','.$idd;
?>
<form method="post" name="frm_paypal" action="https://www.<?=$sandbox;?>paypal.com/cgi-bin/webscr" >
                   <input type="hidden" name="cmd" value="_ext-enter" />
                  <input type="hidden" name="redirect_cmd" value="_xclick" />
                  <input type="hidden" name="business" value="<?=$business;?>" />
                  <input type="hidden" name="return" value="http://toktokenglish.com/demo" />
				  
                  <input type="hidden" name="notify_url" value="<?=$mSiteURL;?>paypalipn.php" />
                  <input type="hidden" name="currency_code" value="<?=$paypal_currency_code;?>" />
                  <input type="hidden" name="item_name" value="<?=$mSiteTitle ?> " />
                  <input type="hidden" name="item_number" value="<?=$ORDER_ID?>" />
                  <input type="hidden" id="paypalcustom" name="custom" value="<?=$custom_key;?>" />
                  <input type="hidden" id="paypalamount" name="amount" value="<?=$amount;?>" />
                  <input type="hidden" name="no_shipping" value="0" />
                  <input type="hidden" name="shipping" value="0.00">
                  <input type="hidden" name="shipping2" value="0.00">
                  <input type="hidden" name="cancel_return" value="<?=$mSiteURL;?>cancell.html" />
                 
			</form>
            
            <script>	
			document.frm_paypal.submit();			
		
            </script>



 

