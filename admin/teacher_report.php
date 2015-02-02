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
									   Welcome		
								</div>
								<div id="content2" style="min-height:350px;">
										<div class="sub_content">
										<table class="table1">
                                                                                    
                                                                                    <tr>
                                                                                        <th>slno</th>
                                                                                        <th>Name</th>                                                                                        
                                                                                        <th>Applied for Course</th> 
                                                                                    </tr>
										    <?php
                                                                                        $qwe=mysql_query("select * from `teacher_applied`");
                                                                                        while($res=mysql_fetch_array($qwe)){
                                                                                            $qwery=mysql_query("select * from `teacher_login` where `slno`='$res[teacher_id]'");
                                                                                            while($result=mysql_fetch_array($qwery)){
                                                                                            
                                                                                    ?>
                                                                                    <tr>                                                                                        
                                                                                        <td><?php echo $res['slno']; ?></td>
                                                                                        <td><?php echo $result['fname'].'&nbsp'.$result['lname'];?></td>
                                                                                        <?php $qwr=mysql_query("select * from `course` where `id`='$res[course]'");
                                                                                                $rs=mysql_fetch_array($qwr);
                                                                                        ?>
                                                                                        <td><?php echo $rs['coursename']; ?></td>
                                                                                    </tr>
                                                                                    <?php } } ?>
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
