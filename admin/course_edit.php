<?php
include_once("function.php");
$id=$_GET['id'];
$qcourse=mysql_query("select * from `course` where `id`='$id'")or die(mysql_error());
$rcourse=mysql_fetch_array($qcourse);
?>
<html>
<head>
	       <title>..::Toktokenglish::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- Load TinyMCE-->
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/setup.js" type="text/javascript"></script/>
   <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
   <script type="text/javascript">
       $(document).ready(function () {

           setupTinyMCE();

       });

   </script>

   <!-- /TinyMCE -->
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
									   Add/Post Course		
								</div>
								<div id="content2" style="min-height:350px;">
										<div class="sub_content">
										
									
					    <form name="f" method="post" action="course_update.php">
						<table class="table">
                                          
					    <tr>
						<td>Course Name:
                                                <input type="hidden" name="idval" value="<?=$id;?>" />
                                                </td>
						<td><input type="text" name="coursename" class="form" value="<?=$rcourse['coursename'];?>" /></td>
					    </tr>
                                            <tr>
                                                <td>No. Of Class:</td>
                                                <td>
                                                    <input type="text" name="noclass" class="form" value="<?=$rcourse['noclass'];?>"/><br/>
						    <span class="smalltext">
								Please provide No Of class take to complete course.
					            </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Time Of Each Class (in Hour):</td>
                                                <td>
                                                    <input type="text" name="time" class="form" value="<?=$rcourse['time'];?>"/><br/>
						    <span class="smalltext">
								Please provide  duration of each class.
					            </span>
                                                </td>
                                            </tr>
					    <tr>
                                                <td>Course Fee:</td>
                                                <td>
                                                    <input type="text" name="fee" class="form" value="<?=$rcourse['fee'];?>"/><br/>
						    <span class="smalltext">
								Please provide course fee.
					            </span>
                                                </td>
                                            </tr>
					    <tr>
                                                <td>Description About Course:</td>
                                                <td>
                                                    <textarea class="tinymce form" name="description"><?=$rcourse['description'];?></textarea><br/>
						    <span class="smalltext">
								Please provide a short description about course.
					            </span>
                                                </td>
                                            </tr>
					    
											<tr> 
												<td>&nbsp;</td> 
												<td><input type="submit" name="submit" value="Submit" class="button" ></td> 
											</tr>
											</table>  
											</form>
					 
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
