<?php
include_once("function.php");

?>
<html>
<head>
	       <title>..::Toktokenglish::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
function status(val1,slno) {
    var r = confirm("Are you sure to change the Status");
    if (r == true) {
	$.ajax({url:"ajax_status.php?id="+val1+"&uid="+slno,
	       success:function(result){     
	       }
	       });	
    } else {
	       return false();
	    
    }
}
</script>
</head>
<body>
<!--------------top bar -------->
 <div id="top_bar">
 		<div id="top_box">
				<h2 style="margin-top:0px; padding-top:8px; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">Admin Panel</h2>
		</div>
 </div>
 <!--------------top bar end-------->
 
 <!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box">
				<?php
				include_once("leftbar.php");
				?>
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
								
						</div>
						<div id="content1">
								<div class="head2">
									   Welcome		
								</div>
								<div id="content2" style="min-height:350px;">
									<div class="sub_content">
									<table class="table1">
                                                                            
                                                                            <tr>
                                                                                <th>Student Name</th>
                                                                                <th>Student email </th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                            <?php
									   
                                                                            $qwe=mysql_query("select * from `user_signin`")or die(mysql_error());
                                                                            while($res=mysql_fetch_array($qwe)){
											  
                                                                            ?>
                                                                            <tr>
                                                                                <td><?php echo $res['firstname'].'&nbsp;'.$res['lastname']; ?></td>
                                                                                <td><?php echo $res['email'];?></td>
                                                                                <td><select id="status<?php echo $res['slno']; ?>" onchange="return status(this.value,<?php echo $res['slno']; ?>);">
                                                                                    <option value="0" <?php if($res['status']==0){echo "selected='selected'";} ?>>open</option>
                                                                                     <option value="1" <?php if($res['status']==1){echo "selected='selected'";} ?>>close</option>
                                                                                </select>
                                                                                </td
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </table>					   
									</div>
									
								</div>
								
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->

<!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
			      &copy;Copy Right All Rights Reserved 2014
		</div>
 </div>
  <!--------------footer end---------> 
</body>
</html>
