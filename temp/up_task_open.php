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
	$task_id="";
	$task_date=date("y-n-d");
	$task_user="hemal";
	$task_client=$_POST["client"];
	$task_email=$_POST["email"];
	$task_tp=$_POST["tp"];
	$task_task=$_POST["task"];
	$task_comp="";
	

	$sql=	"insert into task_open values('".$task_id."','".$task_date."','".$task_user."','".
			$task_task."','".$task_client."','".$task_email."','".$task_tp."','".$task_comp."')";
	$insertresults=mysql_query($sql) or die(mysql_error());
	$t_id=mysql_insert_id();
		if($insertresults>0)
			{
	          $msg="The task '".$task_task."' open for'".$task_client."' on '".$task_date."'\n</div> Your Task ID is<h2>'".$t_id."'</h2> and please Note that for future request ";
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