<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Update</title>

</head>

<body>
<?php
	$pg_v="addu";
	include "dbconnection.php";
	include "access.php";
	
	$cat=$_POST['cat'];
	
	$std_id=$_POST['id'];
	$std_l_name=$_POST["std_l_name"];
	$std_f_name=$_POST["std_f_name"];
	$std_m_name=$_POST["std_m_name"];
	$std_prior=$_POST["std_prior"];
	$std_pri_date=$_POST["std_pri_date"];
	$std_nic=$_POST["std_nic"];
	$std_gender=$_POST["std_gender"];
	$std_marital=$_POST["std_marital"];
	$std_dob=$_POST["std_dob"];
	$std_add1=$_POST["std_add1"];
	$std_add2=$_POST["std_add2"];
	$std_add3=$_POST["std_add3"];
	$std_postal=$_POST["std_postal"];
	$std_email=$_POST["std_email"];
	$std_app_date=$_POST["std_app_date"];
	
	if(!pageaccess($pg_v,$cat))
		{
		echo "Sorry you are not allow ";
		exit();
		}
	else
		{//go aheid 
		}
		
$sql_p1="insert into emp_details values('".$std_id."','".$std_l_name."','".$std_f_name."','".$std_m_name."','".$std_prior."','".		
			$std_pri_date."','".$std_nic."','".$std_gender."','".$std_dob."','".$std_add1."','".$std_add2."','".$std_add3."','".
			$std_postal."','".$std_email."','".$std_app_date."','".$std_marital."')";
			
$nra=mysql_query($sql_p1);

if($nra>0)
			{
	          echo " Successfully Updated";
			}
	
?>

</body>
</html>
