<html><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<body>
<table width="100%" height="100%" border="1">
  <tr>
    <td height="33" bgcolor="#C9DBED"><strong>Searchin Results Found : </strong></td>
  </tr>
  <tr>
    <td height="225">
<?php

	include "dbconnection.php";
	
//////////////////////get data issue from database 
		
		$search=$_POST["my_text"];// user submit array
		
		if($search=="")
			{
				echo "<div align=\"center\"> Enter Search Text in Text Box";
				exit();	
				
			}	
		$splitter = explode(" ", $search);
		
		/////////////////////// get matching words to array	
for($j=0; $j<count($splitter);$j++)   //user text arry
	{
		
		$sql="select issue_id,issue from issues where auth=1";
		$rs=mysql_query($sql) or die(mysql_error());
		while($row=mysql_fetch_assoc($rs))
		{
		
			//$issue_id=$row["issue_id"];
			$issue_id = $row["issue_id"];
			$issue = $row["issue"]; // store data from database
			$wordChunks = explode(" ", $issue);
		
			for($i = 0; $i < count($wordChunks); $i++) // database text array
			{
				if($wordChunks[$i]==$splitter[$j])
				{
					$res[]=$splitter[$j]; // matching data store in $res array
///////////////////////////////////////////////////
			//foreach($row as $value){
				//}
					
/////////////////////////////////////////////////////
				echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
				echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
				echo "</div></td></tr><tr><td width=\"100%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
				echo "<strong>Issue ID : ".$issue_id. " </strong></td>";
				
				
				echo "</tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
				echo "<div align=\"center\">".$issue."</div></td></tr><tr>";
				echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
				echo "<div align=\"center\">";
				echo "<a href=\"\" target=\"_blank\"></a></div></td></tr><tr>";
				echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
				echo "<a href=\"view_solution.php?sid=".$issue_id." \">Solutios</a></td>";
				echo "</tr>";
					
					
////////////////////////////////////////////////////
				}// end of if
			else {$res[]="";
				} // end of else
			} // end of for i++
		} // while
		
} //end of for j++
	


?></td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>
