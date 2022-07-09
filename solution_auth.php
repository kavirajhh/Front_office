

<?php

	include "dbconnection.php";
	include "access.php";
	$pg_v="soat"; // page id
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	
	
	if(!pageaccess($pg_v,$cat))
			{
			
				echo "<h2><div align=\"center\" >Sorry you are not allow to View this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				
			}
			else
			{//go aheid 
			}
	
	
	$temp=$_REQUEST["is_id"];
	$temp_id=$_REQUEST["id"];
	$sql1 = "UPDATE solution SET auth = 1 WHERE trans_id ='".$temp."'";
	$up=mysql_query($sql1) or die(mysql_error());
		
		if($temp!="")
			{	
				$sql=" SELECT client,issue FROM issues  where issue_id='".$temp_id."'";
				$rs=mysql_query($sql) or die(mysql_error());
	

				while($row=mysql_fetch_assoc($rs))
					{
						$client=$row["client"];
						$issue=$row["issue"];
						
					}
	          	$msg="Solution add to your issue ".$issue."   \n";
			  	
			  	$mail=sendmail($client,$msg);
				echo "<div align=center><h2>";
				echo $msg;
				echo "<div>";
				die(mysql_error());
			 }

		else{
		
			
			
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong> Not Authorized Solutions to Publish </strong></font></div></td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT trans_id,issue_id,solution,date FROM solution  where auth='0'";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$trans_id=$row["trans_id"];
	$id=$row["issue_id"];
	$solution=$row["solution"];
	$upuser=$row["user_id"];
	$date=$row["date"];
	
		$sql1=" SELECT issue FROM issues  where issue_id='".$id."'";
			$rs1=mysql_query($sql1) or die(mysql_error());
			while($row=mysql_fetch_assoc($rs1))
				{
					$issue=$row["issue"];
				}
	
//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "Issue ID : ".$id." ";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo " ".$upuser."";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">Date : ".$date."";
echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong>ISSUE : ".$issue."</strong></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">Solution :".$solution."</div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
echo "<a href=\"solution_auth.php?user=".$user."&cat=".$cat."&id=".$id."&is_id=".$trans_id."\">Publish Solution</a></td>";
echo "</tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
}//else
?>
</body>
</html>
