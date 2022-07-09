

<?php

	include "dbconnection.php";
	include "access.php";
	$user=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	
	
	$temp=$_REQUEST["dist"];
	
	//$sql1 = "UPDATE solution SET auth = 1 WHERE trans_id ='".$temp."'";
	//$up=mysql_query($sql1) or die(mysql_error());
	
	?>



<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td colspan="3" bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong>Registered Entrepreneur's  </strong></font></div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff">
      
   Select District from List and Click on GO button
    <form name="form1" method="post" action="view_ent.php" target="_self">
    <?php
	 $sql="select district from district order by district";
	 $rs=mysql_query($sql) or die(mysql_error());
		echo "<form name=\"form1\" method=\"post\" action=\"\"><select name=dist> <option 
		value=\"\"></option>";
		while($row=mysql_fetch_assoc($rs))
			{
		
				foreach($row as $value)
					{
						echo " <option value=".$value.">".$value."</option> ";
							
					}
			}
	 echo "</form>";
	 ?>
    
      <label>
        <input type="submit" name="Submit" value="Go">
        </label>
    
    
    <td width="13%" bgcolor="#ffffff">&nbsp;
    <td width="13%" bgcolor="#ffffff">&nbsp;</td>
  
</table>

<?php 
	
	$sql=" SELECT reg_no, l_name, f_name, m_name, nic, add1, add2, distric, division,tp,email FROM ent_info where distric='".$temp."'";
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
	$u_id=$row["user_id"];
	
//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong> ".$f_name." ".$m_name." ".$l_name." </strong>";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>  ".$add1." , ".$add2."</strong>";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong> ".$tp."</strong>";
echo "</td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\" align=\"center\">";
echo "<a href=\"view_ent_info.php?user=".$user."&cat=".$cat."&no=".$no."\">View Entrepreneur Data</a></div>";
echo "<a href=\"view_ent_register.php??user=".$user."&cat=".$cat."&no=".$no."\">Change Entrepreneur Data</a></div>";
echo "</td></tr></form>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>

</body>
</html>
