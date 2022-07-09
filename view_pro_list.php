

<?php

	
	//include "access.php";
	
	//$temp=$_REQUEST["is_id"];
	
	//$sql1 = "UPDATE pro_schedule SET pro_com = 1 WHERE pro_trans_id ='".$temp."'";
	//$up=mysql_query($sql1) or die(mysql_error());
	
	?>



<html> 
<body bgcolor="#D9E6F2">
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong> Programs schedule in future </strong></font></div></td>
  </tr>
</table>

<?php 
	include "dbconnection.php";
	$sql= "SELECT * FROM pro_schedule WHERE pro_com=0";
	//pro_date  BETWEEN '2010-11-01' AND '2010-11-30' ";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$id=$row["pro_trns_id"];
	$pro_id=$row["pro_id"];
	$program=$row["program"];
	$pro_date=$row["pro_date"];
	$pro_org=$row["pro_org"];
	$pro_loc=$row["pro_location"];
	$pro_tp=$row["pro_tp"];
	$pro_email=$row["pro_email"];
	$pro_vac=$row["pro_vacants"];
	//$user_id=$row["user"];
	//$date=$row["up_date"];
//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
echo "<div align=\"center\"></div></td></tr>";
echo "<tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong> ".$pro_id." </strong></td>";
echo "<td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong> ".$pro_org."</strong></td>";
echo "<td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>Varcants : ".$pro_vac."</strong></td></tr>";
echo "<tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong>".$program."</strong></div></td></tr>";
//////////////////////////
echo "<tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"left\">Program Location : ".$pro_loc."</div></td></tr>";
//////////////////////////
//////////////////////////
echo "<tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"left\">Date Held on : ".$pro_date."</div></td></tr>";
//////////////////////////
//////////////////////////
echo "<tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"left\">Contacs : ".$pro_tp."-".$pro_email."</div></td></tr>";
//////////////////////////
//echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
//echo "<div align=\"center\">";
//echo "<a href=\"".$id."\" target=\"_blank\">".$id."</a></div></td></tr>";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
echo "<a href=\"pro_apply.php?pro_id=".$pro_id."\">Apply</a></td>";
echo "</tr></table>"; //</table></div></td></tr><tr><td></td></tr></table>";*/

}
?>
</body>
</html>
