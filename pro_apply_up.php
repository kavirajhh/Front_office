<html>
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
	$name=$_POST["name"];
	$add=$_POST["add"];
	$tp=$_POST["tp"];
	$email=$_POST["email"];
	$date=date("y-m-d h-m-s");
	
	
//insert the values 
	$sql="INSERT INTO pro_id 
	VALUES ('".$id."','".$pro_id."','".$name."','".$add."','".$tp."','".$email."','".$date."')";
			
	$insert=mysql_query($sql)or die(mysql_error());

// Create Table for register
	

echo "<div align=\"center\"><h2>Registration is success ";

	
?></td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>