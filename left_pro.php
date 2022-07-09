<?php
session_start();
$cat=$_SESSION['cat'];

//////////////////////////////////////////////////////////////////////////
include "dbconnection.php";
function pageaccess($u_pg,$cat)
	{
	$sql="select * from pg_access where page_id='".$u_pg."' and u_cat='".$cat."'";
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
	  <p align="center"><a href=left.php><img src=buttons/nw_image7.gif alt=\"u\" width=68 height=66 border=\"0\" /></a></p>    </td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Program</strong></div></td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Schedule</strong></div></td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="0" bordercolor="#FFFFFF">
      <tr>
        <td bgcolor="#F1F5FA" ><div align="center">
		<?php	
		$pg_v="adpr";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=pro_add.php target=mainFrame>Add Program</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
		
		 </div></td>
      </tr>
      <tr >
        <td bgcolor="#F1F5FA"><div align="center">
		
		<?php	
		$pg_v="prol";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_pro_list.php target=mainFrame>Program List </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
		
		
		</div></td>
      </tr>
      <tr >
        <td bgcolor="#F1F5FA"><div align="center">
		
		  <div align="center">
		    <?php	
		$pg_v="pron";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_pro_by_id.php target=mainFrame>Complete Programs </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
          </div>        </tr>
      
      <tr >
        <td bgcolor="#F1F5FA">      <div align="center">
          <?php	
		$pg_v="adct";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_pro_by_location.php?cat=".$cat." target=mainFrame>Programs By locations </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			?>
        </div>      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
