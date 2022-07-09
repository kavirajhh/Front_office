<?php
$pg_v="addu";
	

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
.style8 {color: #000000}
.style1 {font-size: 36px}
.style2 {color: #FF0000}
.style3 {color: #0000FF}
.style4 {color: #FF9900}
-->
</style></head>

<body>
<table border="0">
  <tr>
    <td width="135">
    <p align="center"><span class="style1"><span class="style2"><a href="left.php">3</a></span><a href="left.php"><span class="style3">M</span><span class="style4">S</span></a><span class="style4"></span></span></p>    </td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Mail &amp; Message</strong></div></td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Management System</strong></div></td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="0" bordercolor="#FFFFFF">
      
      <tr>
        <td bgcolor="#F1F5FA" >      <div align="center">
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
      <tr>
        <td bgcolor="#F1F5FA" ><div align="center">
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
          </div>        </tr>
      <tr>
        <td bgcolor="#F1F5FA" >      <div align="center">
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
        </div>      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
