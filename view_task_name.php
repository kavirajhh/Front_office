<body bgcolor="#FFFFFF">

<html>
<body>
<table width="100%" border="0">
  <tr>
    <td>      
      <div align="center">
        <table width="100%" border="0" bgcolor="#000000">
          <tr>
            <td width="100%" bordercolor="#6699CC"><div align="center"><font color="#FFFFFF" size="+2"><strong><font color="#FFFFFF">Tasks in queue </font>  </strong></font></div></td>
          </tr>
        </table>
      </div>    </td>
  </tr>
  <tr>
    <td>
	<?php
	include "dbconnection.php";
	include "access.php";
	$trans_user=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];

	$temp=$_REQUEST["is_id"];
	if($temp!=""){
	$sql1 = "UPDATE task_trans SET status = 1 WHERE trans_id='".$temp."'";
	$up=mysql_query($sql1) or die(mysql_error());
	}
	else{
		}
	
	$sql=" SELECT trans_id,task_id,trans_job,trans_dis FROM task_trans WHERE forward = '".$trans_user."' and status=0 LIMIT 0 , 30 ";
	
	
	function transer_task($sql,$trans_user,$cat){
	
	$rs=mysql_query($sql) or die(mysql_error());
	echo "<table width=\"100%\" border=\"1\">\n";
	echo "<tr bgcolor=\"#CFDFEF\"><td>Issue ID</td><td>Title</td><td>Discription</td><td></td></tr>";
		while($row=mysql_fetch_assoc($rs)){
		echo "<tr>\n";
		
			foreach($row as $value){
				//echo "<td bgcolor=\"#FFFFFF\">\n";
				//echo $value;
				$name=$row['task_id'];
				$t_id=$row['trans_id'];
				$job=$row['trans_job'];
				$dis=$row['trans_dis'];
			
			}
	echo "<td>$name</td><td>$job</td><td>$dis</td>";
	
	echo "<td><a href=trans_task_for.php?user=".$trans_user."&is_id=".$name."&cat=".$cat."&t_id=".$t_id." >Transer</a></td>";	
	echo "<td><a href=view_task.php?task_id=".$name." >complete</a></td>";		
				echo "</td>\n";
		}echo "</table>\n";
	}
	
	$list=transer_task($sql,$trans_user,$cat);
	
	
	
?>    </td>
  </tr>
  <tr>
    <td bgcolor="#000000"><font color="#FFFFFF">
	
	<?php 
	 		//echo "<a href=view_task_name.php?is_id=1>Task's Transer To Me </a></font></td>";
	 ?>
	 
  </tr>
</table>

</body>
</html>
