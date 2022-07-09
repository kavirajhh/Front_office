<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
	include "dbconnection.php";
	$branch_no='';
	$branch=$_POST["branch"];
	
	
	$sql="insert into branch values('','".$branch."')";

	$nra=mysql_query($sql);
	echo " Branch $branch added to Database";

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Branch Update</title>
</head>

<body>
<div align="center"><a href="branch_int.php" target="_self">Add Next</a>
</div>
</body>
</html>
