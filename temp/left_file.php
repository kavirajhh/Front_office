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
<table width="100%" height="246" border="0" color="#D9E6c2"align="center">
  <tr>
    <td><div align="center"><a href="left.php"><img src="buttons/vndb_icon1.jpg" alt="f" width="91" height="88" border="0" /></a></div></td>
  </tr>
  <tr>
    <td height="48"><div align="center"><strong>Recourse Centre </strong></div></td>
  </tr>
  <tr>
    <td bgcolor="#F1F5FA"><div align="center">
      <div align="center">
        <?php
	 
	 $pg_v="upfl";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=upload_file_screen.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">File Upload </a></div></td>";
				
			}
			else
			{//go aheid 
			}	
			
	?>  
  </div>  </tr>
  <tr>
    <td bgcolor="#F1F5FA"><div align="center">
      <div align="center">
        <?php
	  $pg_v="vatr";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=file_list_all.php target=mainFrame>View Files</a></div></td>";
				
			}
			else
			{//go aheid 
			}	
	  
	 
	  
	  
	  ?>    
    </div>
  </tr>
  <tr>
    <td bgcolor="#F1F5FA"><div align="center">
      <p>
	  
	   <?php
	   
	   $pg_v="vnar";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=file_list_non.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Non Authorize File List</a>";
				
			}
			else
			{//go aheid 
			}		
			
	?>
	 </p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#F1F5FA"><div align="center">
      <div align="center">
        <?php	
			
		$pg_v="flat";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=file_auth.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\"> File Authorize</a></div></td>";
				
			}
			else
			{//go aheid 
			}		
			
			
	?>  
  </div>  </tr>
  <tr>
    <td bgcolor="#F1F5FA"><div align="center">
	  <div align="center">
	    <?php
	$pg_v="schf";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=seatch_file_dis.html target=mainFrame>Search File </a></div></td>";
				
			}
			else
			{//go aheid 
			}		
	
	
	?>
    </div>  </tr>
</table>
<blockquote>&nbsp;</blockquote>
</body>
</html>
