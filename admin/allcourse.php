<?php
include_once("function.php");
?>
<html>
<head>
<title>..::Toktokenglish::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
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
									  Applied Student	
								</div>
								<div id="content2" style="min-height:350px;">
										<div class="sub_content">
										<table class="table1">
                                                                                    <tr>
											  <th>
												Student Name
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
										    $qwery=mysql_query("select s.`firstname`,s.`lastname`,c.`coursename`,a.`time`,a.`id` from `preferred_time` a, `course` c, `user_signin` s where a.`s_id`=s.`slno` and a.`c_id`=c.`id`")or die(mysql_error());
										    while($result=mysql_fetch_array($qwery))
										    {
										    ?>
										    <tr>
											  <td>
											  <?=$result['firstname'].' '.$result['lastname'];?>
											  </td>
											  <td>
											  <?=$result['coursename'];?>
											  </td>
											  <td>
											  <?=$result['time'];?>
											  </td>
											  <td>
											  <input type="button" value="Alot Teacher" onclick="window.location.href='alot.php?id=<?=$result['id'];?>'" />
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
