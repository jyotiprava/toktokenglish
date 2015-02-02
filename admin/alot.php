<?php
include_once("function.php");
$id=$_GET['id'];

$qdetail=mysql_query("select * from `preferred_time` where `id`='$id'")or die(mysql_error());
$rdetail=mysql_fetch_array($qdetail);
?>
<html>
<head>
<title>..::Toktokenglish::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
    function getalot(tid,sid,cid) {
        var r=confirm("Are you sure you want to alot this teacher for thiis course");
        if (r==true) {
           $.ajax({url:"ajax_alot.php?tid="+tid+"&sid="+sid+"&cid="+cid,
                  success:function(results)
                  {
                    if (results.trim()=='OK') {
                        location.reload();
                    }
                  }
           });
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
									   Alot Teacher	
								</div>
								<div id="content2" style="min-height:350px;">
										<div class="sub_content">
										<table class="table1">
                                                                                    <tr>
											  <th>
												Teacher Name
											  </th>
											  <th>
												Course Name
											  </th>
											  <th>
											        Preferred Time
											  </th>
											  <th>
											        Action
											  </th>
										    </tr>
										    <?php
										    $qwery=mysql_query("select t.`fname`,t.`lname`,c.`coursename`,a.`availtime`,a.`teacher_id` from `teacher_applied` a, `course` c, `teacher_login` t where a.`teacher_id`=t.`slno` and a.`course`=c.`id` and a.`course`='$rdetail[c_id]'")or die(mysql_error());
										    while($result=mysql_fetch_array($qwery))
										    {
                                                                                    
                                                                                    $qal=mysql_query("select * from `alottable` where `s_id`='$rdetail[s_id]' and `t_id`='$result[teacher_id]' and `c_id`='$rdetail[c_id]'")or die(mysql_error());
                                                                                    $numrow=mysql_num_rows($qal);
										    ?>
										    <tr>
											  <td>
											  <?=$result['fname'].' '.$result['lname'];?>
											  </td>
											  <td>
											  <?=$result['coursename'];?>
											  </td>
											  <td>
											  <?=$result['availtime'];?>
											  </td>
											  <td>
                                                                                            <?php
                                                                                            if($numrow==0)
                                                                                            {
                                                                                                ?>
											  <input type="button" value="Alot" onclick="return getalot(<?=$result['teacher_id'];?>,<?=$rdetail['s_id'];?>,<?=$rdetail['c_id'];?>);" />
                                                                                          <?php
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                ?>
                                                                                            <input type="button" value="Aloted" />
                                                                                            <?php
                                                                                            }
                                                                                            ?>
											  </td>
										    </tr>
										    <?php
										    }
										    ?>
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