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
	$issue_id=$_POST["issue_id"];
	$solution=$_POST["sol"];
	$cat=$_POST["cat"];
	$sol_user="hemal";
	$sol_date=date("y-n-d H-m-s");
	$auth="";
	
	
	$sql=" SELECT issue,client FROM issues  where issue_id='".$issue_id."'";
	$rs=mysql_query($sql) or die(mysql_error());
	while($row=mysql_fetch_assoc($rs)){
	
	$issue=$row["issue"];
	$name=$row["client"];
	}
	//echo $issue_id,$solution,$sol_user,$sol_date;

$sql="insert into solution values('".$trans_id."','".$issue_id."','".$solution."','".$cat."','".$sol_user.      "','".$sol_date."','".$auth."')";

$insertresults=mysql_query($sql) or die(mysql_error());
	
	if(	$name=="")
			{$name='hemal@localhost';}
			if($insertresults>0)
				{
				
	          	$msg="Client ".$cat." has submit solution to your issue ".$issue."\n";
			  	
			  	$mail=sendmail($name,$msg);
			 }

		else
			{
				$msg=" Error! Check data in form\n";
				$mail=sendmail($name,$msg);
			}
			
			echo "<div align=center><h2>";
			echo $msg;
			echo "<div>";
			die(mysql_error());



?>
</td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>