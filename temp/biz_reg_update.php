
<?php
		
	include "dbconnection.php";
	include "access.php";
	$pg_v="addb"; // page id
	
	
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	
	$id="";
	$ent_id=$_POST["no"];
	$biz_name=$_POST["biz_name"];
	$biz_cat=$_POST["tcat"];
	$product=$_POST["biz_product"];
	$dis=$_POST["dist"];
	$div=$_POST["div"];
	$add=$_POST["biz_add"];
	$add2=$_POST["biz_add2"];
	$tp=$_POST["tp"];
	$email=$_POST["email"];
	$date=date("y-m-d H-i-s");
//insert the values 
	if($user!=$ent_id)
		{
	
		if(!pageaccess($pg_v,$cat))
			{
			echo "<h2><div align=\"center\" >Sorry you are not allow to update this record ";
			echo "<h2><div align=\"center\" >Plese meet authorized officer ";
			exit();
			}
			else
			{//go aheid 
			}
		}
	else
		{
		}
	?>

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
	
	
		
	$sql = "INSERT INTO biz_register (`trans_id`, `ent_id`, `biz_name`, `biz_cat`, `biz_prod`, 
			`biz_dis`,`biz_div`,`biz_add`,`biz_add2`,`biz_tp`, `biz_email`, `user`, `date`) VALUES ('".$id."','".$user
			."','".$biz_name."','".$biz_cat."','".$product."','".$dis."','".$div."','".$add."','".$add2."','".$tp."','".$email."','"
			.$user."','".$date."')"; 
	
	$insert=mysql_query($sql);
	if($insert>0)
			{
					
	          	$msg="Business Name ".$biz_name."  is register against your name \n";
			  	
			  	$mail=sendmail($email,$msg);
			 }

	else
			{
				$msg="business registration Error. Check data in business registration form\n";
				$mail=sendmail($email,$msg);
			}
			
			echo "<div align=center><h2>";
			echo $msg;
			echo "<div>";
			die(mysql_error());
	




	
?></td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>