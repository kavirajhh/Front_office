<?php
session_start();
$cat=$_SESSION['cat'];
$u_id=$_SESSION['user'];


//////////////////////////////////////////////////////////////////////////
include "dbconnection.php";
function pageaccess($u_pg,$u_cat)
	{
	$sql="select * from pg_access where page_id='".$u_pg."' and u_cat='".$u_cat."'";
	$rs=mysql_query($sql);
	$nr=mysql_num_rows($rs);
			if($nr>0)
				{return true;
				}
			else 	
				{ return false;					
				}
	}//end of function pageaccess
	
	
/////////////////////////////////////////////////////////////////////////
?>
<html>
<head>
<title>l</title>
<style type="text/css">
<!--
body {
	background-color: #D9E6F2;
}
-->
</style></head>

<body>
<table border="0">
  <tr>
    <td height="77">
	  <div align="center"><a href=left_ent_pic.php></a> <a href="left.php" target="leftFrame"><img src="buttons/nw_image24.gif" alt="t" width="62" height="68" border="0" /></a></div></td>
  </tr>
  <tr>
    <td height="42"><div align="center"><strong>Task Management </strong></div></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center">

  <?php	
		$pg_v="opts";
		if(pageaccess($pg_v,$cat))
			{
			
				//echo "<a href=task_open.php target=mainFrame>Registration<br><br> </a></div></td>";
				echo "<a href=\"#\" onClick=\"MyWindow=window.open('http://localhost/maxpro/task_open1.php','MyWindow',width=600,height=200); return false;\">Registration</a>";
			}
			else
			{//go aheid 
			}
			
	?>  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center">
  <?php	
		$pg_v="ncot";
		if(pageaccess($pg_v,$cat))
			{
				echo "<a href=\"#\" onClick=\"MyWindow=window.open('http://localhost/maxpro/not_comp_task.php','MyWindow',width=600,height=200); return false;\">Not Complete Task</a>";
				//echo "<a href=not_comp_task.php target=mainFrame>Not Complete Task</a><br><br></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center">
  <?php	
		$pg_v="tetn";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=trans_task.php?user=".$u_id."&cat=".$cat." target=mainFrame>Task Transection</a> <br><br></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center">
  <?php	
		$pg_v="vtbd";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_task_date.php target=mainFrame>Completed Task</a><br><br> </div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center">
	<?php	
		$pg_v="vtbn";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_task_name.php?user=".$u_id."&cat=".$cat." target=mainFrame>View Receved Tasks </a><br><br></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>  </tr>
  
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center">
  <?php	
		$pg_v="scht";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=seatch_task_name.html target=mainFrame>Search By ID</a><br><br></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA"><div align="center"><a href="seatch_task_client.html" target=mainFrame>Search By Name   
    </a><br><br></div>    </tr>
  <tr bgcolor="#ffffff">
  <td bgcolor="#F1F5FA"><div align="center"><a href="seatch_task_date.html" target=mainFrame>Search By Date </a> </div>  </tr>
  <tr bgcolor="#ffffff">
    <td bgcolor="#F1F5FA">  <div align="center"><a href="end_of_day.html" target="mainFrame">End of Day</a> </div>
  </tr>
</table>
</body>
</html>
