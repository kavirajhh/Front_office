<?php

	

session_start();
$cat=$_SESSION['cat'];
$user_id=$_SESSION['user'];


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
    <td width="135">
	  <p align="center"><a href=left.php><img src=buttons/user.gif alt=\"u\" width=80 height=80 border=\"0\" /></a></p>    </td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Entrepreneur </strong></div></td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Links</strong></div></td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#F1F5FA" ><div align="center">
	      <div align="center">
	        <?php	
		$pg_v="addu";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=app_a1.php?user=".$user_id."&cat=".$cat." target=\"_blank\">
				Employee Register</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>      
        </div>        </tr>
      <tr >
        <td bgcolor="#F1F5FA"><div align="center">
	      <div align="center">
	        <?php
	
	$pg_v="addb";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=biz_register.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Add Business</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>      
        </div>        </tr>
      <tr >
        <td bgcolor="#F1F5FA"><div align="center">
		
		  <div align="center">
		    <?php	
		
		$pg_v="chau";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_ent.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">View Entrepreneur's List</a></div></td>";
				
			}
			else
			{//go aheid 
			}
		
			
	?>      
	    </div>        </tr>
      <tr >
        <td bgcolor="#F1F5FA">
		  <div align="center"><a href="page_access.php" target="mainFrame"></a>
		    <?php	
		
		$pg_v="mlsb";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=ml_subscribe.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Subscribe </a></div></td>";
				
			}
			else
			{//go aheid 
			}
		
			
	?>
		  </div>      </tr>
      <tr >
        <td bgcolor="#F1F5FA"><div align="center">
          <?php	
		
		$pg_v="mlsb";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=post_form.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Send Message  </a></div></td>";
				
			}
			else
			{//go aheid 
			}
		
			
	?>
        </div>      </tr>
      <tr >
        <td bgcolor="#F1F5FA">   <div align="center">
          <?php	
		
		$pg_v="mlsb";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=inbox.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">inbox </a></div></td>";
				
			}
			else
			{//go aheid 
			}
		
			
	?>
        </div>        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
