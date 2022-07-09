

<?php

	include "dbconnection.php";
			
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong>  Authorized Solutions</strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT trans_id,issue_id,solution,date FROM solution  where auth='1'";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$trans_id=$row["trans_id"];
	$id=$row["issue_id"];
	$solution=$row["solution"];
	$user=$row["user_id"];
	$date=$row["date"];
	
//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Issue ID : ".$id." </strong>";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Update User : ".$user."</strong>";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>Date : ".$date."</strong>";
echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong>Transection ID : ".$trans_id."</strong></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">".$solution."</div></td></tr>";
//echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
//echo "<a href=\"solution_auth.php?is_id=".$trans_id."\">Publish Solution</a></td></tr>";
//echo ""; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
