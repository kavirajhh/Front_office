<?php 	
		include 
		$task_id=$_REQUEST["task_id"];	
		$sql="update task_open set task_complete=1 where task_id='".$task_id."'"; 
		$rs=mysql_query($sql);
		
?>
