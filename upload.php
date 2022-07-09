<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><body>
<?php

	$pg_v="addu";
	include "dbconnection.php";
	include "access.php";
	
	$std_id=$_COOKIE['username'];
	$cat=$_COOKIE['catagory'];

	if(!pageaccess($pg_v,$cat))
			{
			echo "Sorry you are not allow to submit this form ";
			exit();
			}
		else
		{//go aheid 
		}
//////////////////////////////////////////////////////////////// page 01   
//$sql_p1=$_COOKIE['sql_p1'];
	//$nra=mysql_query($sql_p1);

//////////////////////////////////////////////////////////////// page 02

	/*$sql1=$_COOKIE['sql1'];
	$sql2=$_COOKIE['sql2'];
	$sql3=$_COOKIE['sql3'];
	$sql4=$_COOKIE['sql4'];
	$sql5=$_COOKIE['sql5'];
	$sql6=$_COOKIE['sql6'];
	$sql7=$_COOKIE['sql7'];
	$sql8=$_COOKIE['sql8'];
	
	$sql_array=array($sql1,$sql2,$sql3,$sql4,$sql5,$sql6,$sql7,$sql8);
	
	for($n=0;$n<8;$n=$n+1)
		{
		$nra=mysql_query($sql_array[$n]);
		}
		if($nra>0)
			{
	          echo "Step 02 of 03 update Successfully";
			}*/
//////////////////////////////////////////////////////////////// page 03

	
	/*$year=$_POST['ad_year'];
	$f_s=$_POST['f_s'];
	$type=$_POST['type'];
	$sought=$_POST['sought'];
	$field=$_POST['field'];
	$ass_ship=$_POST['ass_ship'];*/
	$pro=$_FILES['proposal']['name'];
	$dir="proposal/";
	$ext=".jpeg";
	$file_name=$dir.$std_id.$ext;
	
		
	if(move_uploaded_file($_FILES['proposal']['tmp_name'],$file_name))
		{
			$insert="INSERT INTO intended (std_id,pro_name) values('".$std_id."','".$file_name."')";
			$insertresults=mysql_query($insert)
			or die(mysql_error());
		if($insertresults>0)
			{
	        echo "Step 03 of 03 update Successfully</br>";
			echo ("<a href='main.html' target=\"mainFrame\">");
			echo " Back";
			}
		}//end of if(move_upload_file(*/
			
			
?>
