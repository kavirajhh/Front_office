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
	  <div align="center"><a href=left.php><img src="buttons/nw_image32.gif" width="62" height="68" border="0"></a> </div></td>
  </tr>
  <tr>
    <td height="41"><div align="center"><strong>Solution Centre</strong> </div></td>
  </tr>
  <tr>
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <div align="center">
        <?php	
		$pg_v="subi";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=submit_issue.php target=mainFrame>Submit Issue </a</div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
      </div>
    <div align="center"></div>  </tr>
  
  <tr>
    <td border="2"><div align="center">
	
      <div align="center"></div>  </tr>
  <tr>
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <?php	
		$pg_v="atis";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=issue_non_auth.php target=mainFrame>View Issues </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
  </div>  </tr>
  <tr>
    <td border="2"><div align="center">
	
      <div align="center"></div>  </tr>
  <tr>
    <td bgcolor="#F1F5FA" border="2"><div align="center">
      <div align="center">
        <?php	
		$pg_v="schi";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=seatch_text.html target=mainFrame>Search</a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
  </div>  </tr>
  <tr>
    <td border="2"><div align="center">
    <div align="center"></div>    </tr>
  <tr>
    <td bgcolor="#F1F5FA" border="2"><div align="center">
	<?php	
		$pg_v="atso";
		if(pageaccess($pg_v,$cat))
			{
			
				echo "<a href=view_auth_solution.php target=mainFrame>View Solutions </a></div></td>";
				
			}
			else
			{//go aheid 
			}
			
	?>
	
	</div></td>
  </tr>
</table>
</body>
</html>
