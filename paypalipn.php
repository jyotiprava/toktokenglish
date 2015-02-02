<?php
include_once('admin/function.php');
//$tablename="form". $_SESSION['event_id'];
$req = 'cmd=_notify-validate';
// Read the post from PayPal system and add 'cmd'
$fullipnA = array();
foreach ($_POST as $key => $value)
{
	$fullipnA[$key] = $value;

	$encodedvalue = urlencode(stripslashes($value));
	$req .= "&$key=$encodedvalue";
}
$fullipn =Array2Str(" : ", "\n", $fullipnA);


//mail($email, "full IPN", $fullipn);

$payaltest=$_POST['test_ipn'];
if (!$payaltest) 
{
	$url ='https://www.paypal.com/cgi-bin/webscr';	

}else{	

	$url ='https://www.sandbox.paypal.com/cgi-bin/webscr'; 	

}

$curl_result=$curl_err='';
$fp = curl_init();
curl_setopt($fp, CURLOPT_URL,$url);
curl_setopt($fp, CURLOPT_RETURNTRANSFER,1);
curl_setopt($fp, CURLOPT_POST, 1);
curl_setopt($fp, CURLOPT_POSTFIELDS, $req);
curl_setopt($fp, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "Content-Length: " . strlen($req)));
curl_setopt($fp, CURLOPT_HEADER , 0); 
curl_setopt($fp, CURLOPT_VERBOSE, 1);
curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($fp, CURLOPT_TIMEOUT, 30);

$response = curl_exec($fp);
$curl_err = curl_error($fp);
curl_close($fp);
// Assign posted variables to local variables
$item_name = $_POST['item_name'];

$item_number= $_POST['item_number'];
$item_number=explode(",",$item_number);
$emailid=$item_number[0];
$iddd=$item_number[1];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$payment_type = $_POST['payment_type'];
$custom = $_POST['custom'];
$quantity = $_POST['quantity'];
$payer_id=$_POST['payer_id'];
$passw='buzz'.rand(9999,99999);

$amount=$_POST['payment_gross'];
if (strcmp ($response, "VERIFIED") == 0)		
{

mysql_query("update `student_apply_course` set `paystatus`='1' where `id`='$iddd'")or die(mysql_error());

$to=$emailid;
$subject="Congratulations";
$header= "MIME-Version: 1.0" . "\r\n";
$header.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header.="from: auction.softcorp.ca";

$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    
  <table style="width: 500px;  height: auto; margin: auto; font-family: arial; color: #4d4c4c; background: #efefef; text-align: center;">
    <tr>
        <td><img src="http://toktokenglish.com/demo/images/logo.png" style="margin-top:10px;"></td>
    </tr>
    <tr>
        <td style="height: 30px;"></td>
    </tr>
    <tr>
        <td style="font-size: 26px; "><h2 style="width:85%; font-weight:normal; background: #ffffff; padding: 5%; margin:auto;">Welcome to TOK TOK ENGLISH<br/><br/></h2>
	<span style="font-size:16px;">Hello  '.$emailid.',<br/> Your Payment processing successfull.
        </td>
    </tr>
    <tr>
        <td style="height: 50px;"></td>
    </tr>
    
  </table>
    
</body>
</html>';

mail($to,$subject,$message,$header);
}else // if (strcmp ($ret, "INVALID") == 0)
	{
		
		
		TransLog("Invalid Transaction - $ret");
	}
//}

function sentmail($mailid,$msg,$sub)
{
	//mail('sandeep@krititech.in', 'sendtestipn', 'sendtestipn');
	$html = true;
	 $mail = new eMail("clubpedia@localhost","sukalyan.ds@krititech.in"); 
         $mail->subject($sub); 
         $mail->to($mailid);
                        // CC-Entf\E4nger angeben 
         $mail->cc("jyoti.sahoo@krititech.in"); 
                        // BCC-Entf\E4nger angeben 
        $mail->bcc("sukalyan.ds@krititech.in"); 
        $mail->html($msg); 
        $mail->send(); 
}

function notifyClient($ObjCustomer)
{
	$name=$ObjCustomer['name']."  is down";
		
		$message = "Dear Client,\n\n";	
		
		$message .= "Your account is Activated"."\n\n";
		
		
		$message .= "If you have any questions or comments, contact us at contact@failsafe.us"."\n\n";
		$message .= "Cheers!"."\n";
		$message .= "Failsafe"."\n";
		
		$mail=explode(",",$ObjCustomer['email']);
		foreach ($mail as $ma => $m){
		
		mail($m, $name, $message);
		}	
			
		
	
}

function TransLog($ecode)
{
	global $fullipn, $extra_desc, $req, $response, $curl_err;
	
		
	$site_email = "sandeep@krititech.in";
	
		
	
	// Mail admin
	if ($ecode == "Success")
	{		
			
				$message .= $fullipn;
		
		sendMessage($site_email, "New Purchase: $site_name", $message);			
	
	}else{
		
		// payment failed, notify admin and send information
		$message = $ecode."\n\n";
		$message .= $fullipn;
		$message .=  print_r($_POST, TRUE)."\n\n";
		$message .=  $req."\n\n";
		$message .=  "CURL response: ".$response."--CURL ERR:".$curl_err."\n\n";	
				 		
		sendMessage($site_email, "UNSUCCESSFUL IPN: $site_name", $message);	
			
	}
		
	
	
	
}

function sendMessage($site_email, $subject, $message)
	{  
	
	  				
		
		$header ="MIME-Version: 1.0\n"; 
		$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
		$header .="From: BuzzCheck <contact@failsafe.us>\n";
		//$header .="Return-path: ". $remite."\n";
		$header .="X-Mailer: PHP/". phpversion()."\n";	
				
		mail($site_email, $subject, $message, $header);
		//mail("franco_zuna@hotmail.com", $subject, $message, $header);
		
		
		
    }


function recordLog ($ecode)
{
	global $fullipn, $ret;

	

	   
}
function givemePostData ($field){ 

	$val_ret = "";	  	
	foreach($_POST as $field_name => $val){ 
	   $asignation2 = "\$".$field_name."='" . $val . "';";  	  
	  if ($field_name == $field){		  
		  $val_ret = $val; 	  
	  }
	   
	}  	
	return $val_ret;
	   
}

function FailSql($s)
{		
	StopProcess();
	
}

function StopProcess()
{

	exit;
}
function Array2Str($kvsep, $entrysep, $a)
	{
		$str = "";
		foreach ($a as $k=>$v)
		{
			$str .= "{$k}{$kvsep}{$v}{$entrysep}";
		}
		return $str;
	}
	

session_destroy();


?>
