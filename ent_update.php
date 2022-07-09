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
	//header files	
	include "dbconnection.php";
	include "access.php";
	$pg_v="addu";
	
	
	$cat=$_REQUEST["cat"];
	
	if(!pageaccess($pg_v,$cat))
			{
			echo "<h2><div align=\"center\" >Sorry you are not allow to update this record ";
			echo "<h2><div align=\"center\" >Plese meet authorized officer ";
			exit();
			}
		else
		{//go aheid 
		}
	
	$ent_id="";
	$ent_l_name=$_POST["l_name"];
	$ent_f_name=$_POST["f_name"];
	$ent_m_name=$_POST["m_name"];
	$ent_marital=$_POST["marital"];
	$ent_gender=$_POST["gender"];
	$ent_nic=$_POST["nic"];
	$ent_dob=$_POST["dob"];
	$ent_add1=$_POST["add1"];
	$ent_add2=$_POST["add2"];
	$ent_dist=$_POST["dist"];
	$ent_div=$_POST["div"];
	$ent_tp=$_POST["tp"];
	$ent_tp2=$_POST["tp2"];
	$ent_email=$_POST["email"];
	$user_id=$_REQUEST["user"];
	$date=date("y-m-d");
	
//insert the values 
	$sql="INSERT INTO ent_info (`reg_no`, `l_name`, `f_name`, `m_name`, `marital`, `gender`, 
	`nic`, `dob`, `add1`, `add2`, `distric`, `division`, `tp`,`tp2`, `email`, `user_id`, `date`)
	values('".$ent_id."','".$ent_l_name."','".$ent_f_name."','".$ent_m_name."','".$ent_marital.
	"','".$ent_gender."','".$ent_nic."','".$ent_dob."','".$ent_add1."','".$ent_add2."','".$ent_dist
	."','".$ent_div."','".$ent_tp."','".$ent_tp2."','".$ent_email."','".$user_id."','".$date."')";
	
	
	$insert=mysql_query($sql);
	if($insert>0)
			{
					
	          	$msg="Your Information has successfull updated \n";
			  	
			  	$mail=sendmail($ent_email,$msg);
			 }

	else
			{
				$msg="update Error. Check data in registration form\n";
				$mail=sendmail($ent_email,$msg);
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