<html><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<body>
<table width="100%" height="100%" border="1">
  <tr>
    <td height="42" bgcolor="#C9DBED">&nbsp;</td>
  </tr>
  <tr>
    <td height="173">
<?php

	include "dbconnection.php";
	include "access.php";
	// update open task table
		$task_id=$_REQUEST["task_id"];
					
		$sql="update task_open set task_complete=1 where task_id='".$task_id."'";
		$rs=mysql_query($sql);
		
		$sql1="select * from task_open where task_id='".$task_id."'";
		$rs2=mysql_query($sql1);
		
			while($row=mysql_fetch_assoc($rs2))
					{
						$task=$row["task"];
						$task_email=$row["task_email"];
					
					}//end of while
				
		
			
	
	//insert complete massege in to trans table
		$trans_id="";
		$trans_date=date("y-n-d");
		$trans_job="JOB COMPLETED";
		$trans_dis="";
		$trans_user="hemal";
		
		$sql="insert into task_trans values('".$trans_id."','".$task_id."','".$trans_date."','".	
		$trans_job."','".$trans_dis."','".$trans_user."','','0')";
		$insertresults=mysql_query($sql) or die(mysql_error());
		
			if($insertresults>0)
			{
				
				
	          	$msg="Job of Transection '".$task." is completed on '".$trans_date."'\n";
			  	echo $msg;
			  	$mail=sendmail($task_email,$msg);
			 }
	
?>
</td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>
