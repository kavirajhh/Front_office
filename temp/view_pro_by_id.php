<?php

	include "dbconnection.php";
	
	
	$temp=$_REQUEST["is_id"];
	
	$sql1 = "UPDATE pro_schedule SET pro_com = 1 WHERE pro_id ='".$temp."'";
	$up=mysql_query($sql1) or die(mysql_error());
	
	?>
<html> 
<body bgcolor="#D9E6F2">
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong> Programs schedule in future </strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql= "SELECT pro_id,program FROM pro_schedule WHERE pro_com=0";
	$rs=mysql_query($sql) or die(mysql_error());
	
			while($row=mysql_fetch_assoc($rs)){
		echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\"><tr>";
		
			foreach($row as $value){
			$pro_id=$row['pro_id'];
			echo "<td width=\"30%\">";
			echo "<a href=view_pro_by_id.php?is_id=".$pro_id.">".$value."</a>";
			echo "</td>\n";
						
			}echo "</tr></table>";
			}
		
	
				
?>
</body>
</html>
