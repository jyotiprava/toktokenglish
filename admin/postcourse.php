<?php
include_once("function.php");
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
function delete_course(id) {
	var r=confirm("Are You Sure You Want to delete this course.");
	if (r==true) {
	      window.location.href="course_delete.php?id="+id;
	}
	else{
	       return false;
	}
}
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
										
						<?php if(isset($_GET['msg'])) { $msg=$_GET['msg']; echo '<span class="msg1">'.$msg.'</span>';}?>			
					    <form name="f" method="post" action="course_insert.php">
						<table class="table">
                                          
					    <tr>
						<td>Course Name:</td>
						<td><input type="text" name="coursename" class="form" required/></td>
					    </tr>
                                            <tr>
                                                <td>No. Of Class:</td>
                                                <td>
                                                    <input type="text" name="noclass" class="form" required/><br/>
						    <span class="smalltext">
								Please provide No Of class take to complete course.
					            </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Time Of Each Class (in Hour):</td>
                                                <td>
                                                    <input type="text" name="time" class="form" required/><br/>
						    <span class="smalltext">
								Please provide  duration of each class.
					            </span>
                                                </td>
                                            </tr>
					    <tr>
                                                <td>Course Fee:</td>
                                                <td>
                                                    <input type="text" name="fee" class="form" required/><br/>
						    <span class="smalltext">
								Please provide course fee.
					            </span>
                                                </td>
                                            </tr>
					    <tr>
                                                <td>Description About Course:</td>
                                                <td>
                                                    <textarea class="tinymce form" name="description"></textarea><br/>
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
					  <div style="width: 100%;height: auto;float: left;margin-top: 20px;">
					     <table class="table1">
							    <tr>
									   <th>Course</th>
									   <th>No. Of Class</th>
									   <th>Duration Of Class</th>
									   <th>Fee</th>
									   <th colspan="2">Action</th>
							    </tr>
							    <?php
							    $qwery=mysql_query("select * from `course`")or die(mysql_error());
							    while($res=mysql_fetch_array($qwery))
							    {
							    ?>
							    <tr>
									   <td>
									   <?=$res['coursename'];?>
									   </td>
									   <td>
									   <?=$res['noclass'];?>
									   </td>
									   <td>
									   <?=$res['time'];?>
									   </td>
									   <td>
									   <?=$res['fee'];?>
									   </td>
									   <td>
											  <a href="course_edit.php?id=<?=$res['id'];?>">
													 <img src="images/edit.png">
											  </a>
									   </td>
									   <td>
											  
											<img src="images/delete1.png" style="cursor: pointer;" onclick="delete_course(<?=$res['id'];?>);">
											  
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
