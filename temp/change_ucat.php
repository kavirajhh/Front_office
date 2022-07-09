<html><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<body>
<?php

	include "dbconnection.php";
	include "access.php";
	$u_id=$_POST["log_name"];
	$cat=$_POST["u_cat"];
	
if($u_id==""){
	echo ("Enter Valied User Name");
	exit();
	}
		
else{
	
	$sql2="select u_id from user where u_id='".$u_id."'";
	$rs=mysql_query($sql2);
	$row=mysql_fetch_array($rs);
	$u=$row["u_id"];
	
	if($u==$u_id){
	
		$u_cat=cat_id($cat);
		$sql="update user set u_cat='".$u_cat."' where u_id='".$u_id."'";
		$rs=mysql_query($sql);
		
		if($rs>0){
			$sql1="select * from user where u_id='".$u_id."'";
			$rs=mysql_query($sql1);
			echo("<h2>");
			while($row=mysql_fetch_array($rs)){
					$id=$row["u_id"];
					$cat=$row["u_cat"];
					
					echo("User Catagory of $id is change in to catagory $cat<br>");
					
	
				}//end of while

			echo("</h2>");
			exit();
			}//end of if($nra>0)

			else{	echo("<h2>insertion falied</h2>");
				}
			}//if($u==$u_id){
		else{
			echo " User is not in Database";
			}
	}	
?>
</body>
</html>