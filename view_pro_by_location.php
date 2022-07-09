<?php

	include "dbconnection.php";
	include "access.php";
	$t_cat=$_REQUEST["t_cat"];

	
	?>
<html> 
<body bgcolor="#D9E6F2">
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong> Programs schedule in future </strong></font></div></td>
  </tr>
  <tr>
    <td bgcolor="#000000">
	<form name="form1" method="post" action="view_pro_by_location.php">
	  <label></label>
	  <?php
			$sql="SELECT pro_location FROM pro_schedule GROUP BY pro_location LIMIT 0 , 30 ";
			$name='t_cat';
	  		$id=view_id($sql,$name);
	
	?>
	  <input type="submit" name="Submit" value="Go">
	</form>	</td>
  </tr>
</table>

<?php 
	
	$sql= "SELECT pro_id,program,pro_date FROM pro_schedule WHERE pro_com=0 and
	pro_location='".$t_cat."'";
	$rs=mysql_query($sql) or die(mysql_error());
		
			while($row=mysql_fetch_assoc($rs)){
		
	echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\"><tr bgcolor=\"#D9E6F2\" >";
	//echo "<td>Program ID</td><td>Program</td><td>Date/Time</td></tr><tr>";		
		
			foreach($row as $value){
			
			echo "<td width=\"30%\">";
			echo $value;
			echo "</td>\n";
						
			}echo "</tr></table>";
			}
		
	
				
?>
</body>
</html>
