

<?php

	include "dbconnection.php";
	include "access.php";
	$user=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	
	
	/*$temp=$_REQUEST["is_id"];
	
	$sql1 = "UPDATE solution SET auth = 1 WHERE trans_id ='".$temp."'";
	$up=mysql_query($sql1) or die(mysql_error());*/
	
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td colspan="4" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong>Registered Entrepreneur's  </strong></font></div></td>
  </tr>
  <tr>
    <td width="12%" bgcolor="#ffffff">District</td>
    <td width="62%" bgcolor="#ffffff">&nbsp;</td>
    <td width="13%" bgcolor="#ffffff">&nbsp;</td>
    <td width="13%" bgcolor="#ffffff">&nbsp;</td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT reg_no, l_name, f_name, m_name, nic, add1, add2, distric, division,tp,email FROM ent_info order by distric";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$no=$row["reg_no"];
	$l_name=$row["l_name"];
	$f_name=$row["f_name"];
	$m_name=$row["m_name"];
	$nic=$row["nic"];
	$add1=$row["add1"];
	$add2=$row["add2"];
	$distric=$row["distric"];
	$division=$row["division"];
	$tp=$row["tp"];
	$email=$row["email"];
	
//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Registration No : ".$no." </strong>";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>District : ".$distric."</strong>";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>Divition : ".$division."</strong>";
echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong> ".$f_name." ".$m_name." ".$l_name. "</strong></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">".$add1." , ".$add2."</div>";
echo "<div align=\"center\">".$tp."</div>";
echo "<div align=\"center\">".$email."</div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\" align=\"center\">";
echo "<a href=\"view_ent_register.php?user=".$user."&cat=".$cat."&no=".$no."\">Change Entrepreneur Data</a>";
echo "<div align=\"center\"><a href=\"view_ent_register.php?user=".$user."&cat=".$cat."&no=".$no."\">Change Business Information</a></div>";
echo "</td></tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
