

<?php

	include "dbconnection.php";
	include "access.php";
	
	//$temp=$_REQUEST["is_id"];
	
	//$sql1 = "select * from pro_schedule where pro_date between \'2010-11-1\' and \'2010-11-30\'";
	//$up=mysql_query($sql1) or die(mysql_error());
	
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong> Publish Files To Users </strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql1 = "select * from pro_schedule where pro_date between \'2010-11-1\' and \'2010-11-30\'";
	$up=mysql_query($sql1) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$id=$row["file_id"];
	$dis=$row["file_dis"];
	$cat=$row["file_cat"];
	$date=$row["up_date"];
	$user=$row["up_user"];

//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Update User ID : ".$user." </strong>";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Catagory : ".$cat."</strong>";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>Update Date : ".$date."</strong>";
echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong>".$dis."</strong></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">";
echo "<a href=\"".$id."\" target=\"_blank\">".$id."</a></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
echo "<a href=\"file_auth.php?is_id=".$id."\">Publish File</a></td>";
echo "</tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
