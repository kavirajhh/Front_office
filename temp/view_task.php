<?php
	include "dbconnection.php";
	$task_id=$_REQUEST["task_id"];
	
	$sql="select * from task_open where task_id='".$task_id."'";
	$rs=mysql_query($sql) or die(mysql_error());
	
	while($row=mysql_fetch_array($rs)){
		$id=$row["task_id"];
		$date=$row["task_date"];
		$user=$row["task_user"];
		$task=$row["task"];
		$client=$row["task_client"];
		$email=$row["task_email"];
		$phone=$row["task_phone"];
		$com=$row["task_complete"];
		}
		?>

<table width="100%" border="1" bordercolor="#FF0000">
  <tr>
    <td colspan="4" bordercolor="#6699CC" bgcolor="#CFDFEF"><div align="center"><strong>Detail of Task ID </strong></div></td>
    <td colspan="2" bordercolor="#6699CC" bgcolor="#CFDFEF"><?php echo $id ?></td>
  </tr>
  <tr>
    <td width="123" bgcolor="#FFFFFF"><strong>Open Date </strong></td>
    <td colspan="2"><?php echo $date ?>&nbsp;</td>
    <td width="176" bgcolor="#FFFFFF"><strong>Open User </strong></td>
    <td colspan="2"><?php echo $user ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><strong>Client Name </strong></td>
    <td width="200"><?php echo $client ?>&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF"><strong>e-mail</strong></td>
    <td bgcolor="#EEF3F9"><?php echo $email ?>&nbsp;</td>
    <td width="72" bgcolor="#FFFFFF"><strong>Telephone</strong></td>
    <td width="89"><?php echo $phone ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#CFDFEF"><div align="center">
      <p>&nbsp;</p>
      <p>Task Status </p>
    </div></td>
  </tr>
</table>

	
<p>
  <?php

	$sql2="select trans_date,trans_job,trans_dis from task_trans where task_id='".$task_id."'";
	$rs=mysql_query($sql2) or die(mysql_error());
	echo "<table width=\"100%\" border=\"1\">\n";
	while($row=mysql_fetch_assoc($rs)){
		echo "<tr>\n";
		foreach($row as $value){
			echo "<td>\n";
			echo $value;
			echo "</td>\n";
			
			}
			
		echo "</tr>\n";
	}
	if($com!=1)
	{
	echo "<tr><td></td><td></td><td align='right'><a href=complete_job.php?task_id=".$task_id.">";
	echo "Complete Task</a>";
	echo "</td></tr>";
	}
	echo "</table>\n";	
	
?>

