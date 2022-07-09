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
    <td height="42" bgcolor="#C9DBED">&nbsp;</td>
  </tr>
  <tr>
    <td height="173">
	<?php
		
	include "dbconnection.php";
	$id="";
	$pro_id=$_POST["pro_id"];
	$program=$_POST["program"];
	$pro_date=$_POST["pro_date"];
	$pro_org=$_POST["pro_org"];
	$pro_loc=$_POST["pro_loc"];
	$pro_tp=$_POST["pro_tp"];
	$pro_email=$_POST["pro_email"];
	$pro_vac=$_POST["pro_vac"];
	$user_id="hemal";
	$date=date("y-m-d h-m-s");
	
//insert the values 
	$sql="INSERT INTO pro_schedule (pro_trns_id , pro_id , program , pro_date , pro_org , 	
	pro_location , Pro_tp , pro_email , pro_vacants , user , up_date ) 
	VALUES ('".$id."','".$pro_id."','".$program."','".$pro_date."','".$pro_org."','".$pro_loc."','"		
	.$pro_tp."','".$pro_email."','".$pro_vac."','".$user_id."','".$date."')";
			
	$insert=mysql_query($sql)or die(mysql_error());

// Create Table for register
	

echo "<div align=\"center\"><h2>Successfully added the Program in to Schedule ";

	
?></td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>