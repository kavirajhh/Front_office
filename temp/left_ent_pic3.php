<?php
include "dbconnection.php";
//include "access.php";	

session_start();
$cat=$_SESSION['cat'];
$user=$_SESSION['user'];
// page cat 1
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
	  <p><a href=left.php><img src=buttons/user.gif alt=\"u\" width=100 height=100 border=\"0\" /></a></p>    </td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Entrepreneur </strong></div></td>
  </tr>
  <tr>
    <td height="22"><div align="center"><strong>Links</strong></div></td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="1" bordercolor="#FFFFFF">
      <tr>
        <td ><div align="center">
	<?php	
	
	$sql="select pg_name from pages where pg_id in (select page_id from pg_access where u_cat='".$cat."')";
	//$sql="select page_id from pg_access where u_cat='".$cat."'";
	$rs=mysql_query($sql)or die(mysql_error());
	while($row=mysql_fetch_assoc($rs)){
				$link=$row["link"];
		
				echo "<a href=".$link."?user=".$user."&cat=".$cat." target=\"mainFrame\">User 
				Register</a></div></td>";
				
				}
	
	
			
	?>
      </tr>
      <tr >
        <td><div align="center">
	<?php	
			echo "<a href=biz_register.php?user=".$user."&cat=".$cat." target=\"mainFrame\">Add Business to user</a></div></td>";
	?>
		
      </tr>
      <tr >
        <td><div align="center">
		
		<?php	
			echo "<a href=view_ent.php?user=".$user."&cat=".$cat." target=\"mainFrame\">View &amp; Change Data</a></div></td>";
	?>
		
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
