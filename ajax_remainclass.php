<?php
include_once("admin/function.php");
$stud_slno=$_SESSION['sidval'];
$courseid=$_GET['id'];
$sql=mysql_query("select * from `student_performance` where `stud_id`='$stud_slno' and `course_id`='$courseid' ORDER BY  `date` DESC");
$row=mysql_fetch_array($sql);
$attend=$row['class_no'];
$courseid=$row['course_id'];
$coursename=mysql_query("select * from `course` where `id`='$courseid'");
$rescname=mysql_fetch_array($coursename);
$course=mysql_query("select `noclass` from `course` where `id`='$courseid'");
$res=mysql_fetch_array($course);
$total=$res['noclass'];
$rest=$total-$attend;
$time=mysql_query("select `time` from `preferred_time` where `c_id`='$courseid'");
$restime=mysql_fetch_array($time);
?>
<script type="text/javascript">
        $(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'column'
	    
        },
	plotBackgroundColor: 'rgba(255, 255, 255, .9)',
        title: {
            text: ''
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
    </script>
								<h2 class="head3" style="border-bottom:2px solid #dd6a2a;">
								<span>You Have <?php echo $rest;?> Classes remaining..!! Schedule here</span>
								<br />
                                        <br />
                                        <span style="font-weight:normal;">Your Next Class:</span>
                                        <br />
                                        <span style="font-weight:normal;">Date</span>
                                        <span style="font-size:29px; color:#e16428; font-weight:normal;">
										<?php
										$date=$row['next_class'];
										if($date==0000-00-00){
										}
										else{
										$nextdate=date('d . m . Y', strtotime($date));
										echo $nextdate;
										}
										?>
										</span>
                                        <span style="font-weight:normal;">Time</span>
                                        <span style="font-size:29px; color:#e16428; font-weight:normal;"><?php echo $restime['time'];?></span>
								</h2>		
								<h2 class="head3" style=" margin-top:15px;">
                                		Message from your Teacher: <?php echo $row['message'];?>
                                        <br />
  
                                </h2>
								<div id="container" style="width: 500px; height: 400px; float: left;margin-top:15px;border: 1px solid #ccc;"></div>  
                                
								</div>
			
								<table id="datatable" style="display: none;">
									<thead>
										<tr>
											<th></th>
											<th>Performance Meter</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>Pronunciation</th>
											<td><?php echo $row['pronounciation'];?></td>
											
										</tr>
										<tr>
											<th>Vocab</th>
											<td><?php echo $row['vocab'];?></td>
											
										</tr>
										<tr>
											<th>Listening</th>
											<td><?php echo $row['listening'];?></td>
											
										</tr>
										<tr>
											<th>Grammar</th>
											<td><?php echo $row['grammer'];?></td>
											
										</tr>
										
									</tbody>
								</table>|
								
								
                                		<?php
										

$sqll=mysql_query("select * from `student_performance` where `course_id`='$courseid' and `stud_id`='$stud_slno' and `teacher_id`='$row[teacher_id]'");
$num=mysql_num_rows($sqll);
$sqlclass=mysql_query("select * from `course` where `id`='$courseid'");
$resclass=mysql_fetch_array($sqlclass);
$numclass=$resclass['noclass'];
if($num==0){
for($i=1;$i<=$numclass;$i++){
?>
<div id="divid<?php echo $i;?>" style="width:25px; height:auto; float:left;">
<input type="button" value="<?php echo $i;?>"/>
</div>
<?php
}
}
else
{
while($rows=mysql_fetch_array($sqll)){
$class=$rows['class_no'];
$ext=explode(" ",$class);

if($rows['class_type']=='attend')
{
    $classc='greenimg';
}
else
{
    $classc='redimg';
}

?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $class;?>" class="<?=$classc;?>"/>
</div>
<?php
}
$last=end($ext);
for($i=$last+1;$i<=$numclass;$i++){
?>
<div id="divid<?php echo $i;?>" style="width:40px; height:auto; float:left;">
<input type="button" value="<?php echo $i;?>" class="grayimg"/>
</div>
<?php
}
}
?>
                               