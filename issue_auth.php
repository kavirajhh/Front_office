

<?php

	include "dbconnection.php";
	include "access.php";
	include "pgaccess.php";
	$pg_v="isat"; // page id
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	
	
	if(!pageaccess($pg_v,$pcat))
		{
		echo "Sorry you are not allow to submit this form ";
		exit();
		}
	else
		{//go aheid 
		}
		
	
	
	
	$temp=$_REQUEST["is_id"];
	
	$sql1 = "UPDATE issues SET auth = 1 WHERE issue_id ='".$temp."'";
	$up=mysql_query($sql1) or die(mysql_error());
	
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong>Issues Not Authorized to Publish </strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT issue_id,client,title,issue,date FROM issues  where auth='0'";
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
echo "<a href=\"issue_auth.php?user=".$user."&cat=".$cat."&is_id=".$id."\">Publish</a></td>";
echo "</tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
