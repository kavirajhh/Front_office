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
<table width="122" height="233" border="0">
  <tr>
    <td width="112" border="0">
	  <div align="center"><a href=left.php><img src="buttons/nw_image13.gif" width="63" height="63" border="0"></a> </div></td>
  </tr>
  <tr>
    <td height="41"><div align="center"><strong>Admin Links </strong> </div></td>
  </tr>
  <tr>
    <td border="2"><div align="center">
      <div align="center"></div>  </tr>
  
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
	
      <div align="center">
        <?php	
		$pg_v="isat";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=issue_auth.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Issue Authorize</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>  
  </div>  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <?php	
		$pg_v="soat";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=solution_auth.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Solution Authorize</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
  </div>  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
	
      <div align="center">
        <?php	
		$pg_v="solu";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=solution.php target=mainFrame>Solution</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
      </div>
      <div align="center"></div>
  <div align="center"></div>  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <div align="center">
        <?php	
		
		$pg_v="chau";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=page_access.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Restric Pages</a></div></td>";
				
			}
			else
			{//go aheid 
			}
		
			
	?>
      </div>
      <div align="center"></div>
    <div align="center"></div>  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <div align="center">
        <?php	
		
		$pg_v="chau";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=page_access2.php?user=".$user_id."&cat=".$cat." target=\"mainFrame\">Revork Restriction </a></div></td>";
				
			}
			else
			{//go aheid 
			}
		
			
	?>
      </div>
      <div align="center"></div>
    <div align="center"></div>    </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <?php	
		$pg_v="adct";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=add_tech_cat.php?cat=".$cat." target=mainFrame>Technology Categories </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			?>
    </div></td>
  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <?php	
		$pg_v="atis";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=change_cat.php?cat=".$cat." target=mainFrame>Change user category </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			?>
    </div>    </td>
  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2">
		<div align="center">
		<a href="#" onClick="MyWindow=window.open('http://localhost/maxpro/gn_int.html','MyWindow',width=600,height=300); return false;">Add GN</a> 		 		</div>
	</td>
  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2">
		<div align="center">
		<a href="#" onClick="MyWindow=window.open('http://localhost/maxpro/branch_int.php','MyWindow',width=600,height=100); return false;">Add Branch</a> 		 		
		</div>
	
	</td>
  </tr>
  <tr bgcolor="#999999">
    <td bgcolor="#F1F5FA" border="2">
		<div align="center">
		<a href="#" onClick="MyWindow=window.open('http://localhost/maxpro/subject_int.php','MyWindow',width=600,height=100); return false;">Add Subject</a> 		 		
		</div>
	
	</td>
  </tr>
</table>
</body>
</html>
