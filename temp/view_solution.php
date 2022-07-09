

<?php

	include "dbconnection.php";
	include "access.php";
	
	$temp=$_REQUEST["sid"];
	
	
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong>  Solutions for Search Texts </strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT trans_id,issue_id,solution,date FROM solution  where issue_id='".$temp."'";
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
echo "<font color=\"#000099\" >Issue ID : ".$id."</font> ";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "Update User : ".$user."</td>";
echo "<td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">Date : ".$date."</td>";
echo "</tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">Solution : ".$trans_id."</div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">".$solution."</div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"> .</td>";

echo "</tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
