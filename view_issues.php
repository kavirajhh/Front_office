

<?php

	include "dbconnection.php";
	include "access.php";
	
	$temp=$_REQUEST["is_id"];
	
		
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong>Submited Issues </strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT issue_id,client,title,issue,date FROM issues  where auth='1'";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$id=$row["issue_id"];
	$clien=$row["client"];
	$date=$row["date"];
	$title=$row["title"];
	$issue=$row["issue"];

//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Issue ID : ".$id." </strong>";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Client : ".$clien."</strong>";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>Date : ".$date."</strong>";
echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong>".$title."</strong></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">".$issue."</div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
echo "<a href=\"view_solution.php?sid=".$id." \">Solutios</a></td>";
echo "</tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
