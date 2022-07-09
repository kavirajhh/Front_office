<?php

	include "dbconnection.php";
	
//////////////////////get data issue from database 
		
		$search=$_POST["my_text"];// user submit array
		$splitter = explode(" ", $search);
		
		/////////////////////// get matching words to array	
for($j=0; $j<count($splitter);$j++)   //user text arry
	{
		
		$sql="select file_id,file_dis,up_date from up_file";
		$rs=mysql_query($sql) or die(mysql_error());
		while($row=mysql_fetch_assoc($rs))
		{
		
			//$issue_id=$row["issue_id"];
			$file_id = $row["file_id"];
			$file_dis = $row["file_dis"];
			$up_date=$row["up_date"]; // store data from database
			$wordChunks = explode(" ", $file_dis);
		
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
				echo "<strong>File ID : ".$file_id. " </strong></td>";
				
				
				echo "</tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
				echo "<div align=\"center\">".$file_dis."</div></td></tr>";
				echo "<tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
				echo "<div align=\"center\">".$up_date."</div></td></tr><tr>";
				echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
				echo "<div align=\"center\">";
				echo "<a href=\"\" target=\"_blank\"></a></div></td></tr><tr>";
				echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
				echo "<a href=".$file_id.">Download</a></td>";
				echo "</tr>";
					
					
////////////////////////////////////////////////////
				}// end of if
			else {$res[]="";
				} // end of else
			} // end of for i++
		} // while
		
} //end of for j++
	

/**************************************
for($k = 0; $k < count($res); $k++)
	{
	if(	$res[$k]!="")
		{
		echo "$res[$k]<br>";
		
		}

	}
****************************************/


?>
