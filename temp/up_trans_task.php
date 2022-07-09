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
	$trans_id="";
	$task_id=$_POST["task_id"];
	$trans_date=date("y-n-d");
	$trans_job=$_POST["trans"];
	$trans_dis=$_POST["dis"];
	$trans_user=$_REQUEST["user"];
	$forward=$_POST["u"];
	$com_trans=$_REQUEST["t_id"];
	
	// collect email address
	$sql1="select * from task_open where task_id='".$task_id."'";
	$rs2=mysql_query($sql1);
	
	if($com_trans!=""){
	$sql1 = "UPDATE task_trans SET status = 1 WHERE trans_id='".$com_trans."'";
	$up=mysql_query($sql1) or die(mysql_error());
	}	
			while($row=mysql_fetch_assoc($rs2))
					{
						$task=$row["task"];
						$task_email=$row["task_email"];
					
					}//end of where
					
					
	$sql=	"insert into task_trans values('".$trans_id."','".$task_id."','".$trans_date."','".
				$trans_job.      "','".$trans_dis."','".$trans_user."','".$forward."','0')";
	$insertresults=mysql_query($sql) or die(mysql_error());
	
		if($insertresults>0)
			{
								
	          	$msg="Make Transection <div><em>'".$trans_job." </em><div> to your Job <em>'".
				$task."'</em><div> on  \"'".$trans_date."'\"";
				echo "<div align=\"center\">";
			  	echo $msg;
			  	$mail=sendmail($task_email,$msg);
			 }
	
echo "<div align=\"center\">Task Transection add to Database";
?>
</td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>