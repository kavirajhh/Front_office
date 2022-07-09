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
	  <div align="center">
<?php
		
	include "dbconnection.php";
	include "access.php";
	$pg_v="chau"; // page id
	
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	
	$ent_id=$_POST["id"];
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
	$ent_email=$_POST["email"];
	$user_id=$_REQUEST["ent"];
	$date=date("y-m-d");
	
		if(!pageaccess($pg_v,$cat))
			{
			if($user!=$user_id)
				{
				echo "<h2><div align=\"center\" >Sorry you are not allow to update this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				}
			else
				{
				}	
				
			}
			else
			{//go aheid 
			}
		
	
	//$ent_id=$_POST["id"];
	
		

	
//insert the values 
	$sql="update ent_info set
	reg_no='".$ent_id."',
	l_name='".$ent_l_name."',
	f_name='".$ent_f_name."',
	m_name='".$ent_m_name."',
	marital='".$ent_marital."',
	gender='".$ent_gender."',
	nic='".$ent_nic."',
	dob='".$ent_dob."',
	add1='".$ent_add1."',
	add2='".$ent_add2."',
	distric='".$ent_dist."',
	division='".$ent_div."',
	tp='".$ent_tp."',
	email='".$ent_email."',
	user_id='".$user."',
	date='".$date."' 
	where reg_no='".$ent_id."'";
		
	$insert=mysql_query($sql);

		if($insert>0)
			{
					
	          	$msg="User Data of user ".$user."  is change by ".$user." \n";
			  	
			  	$mail=sendmail($ent_email,$msg);
			 }

		else
			{
				$msg=" Error! Check data in form\n";
				$mail=sendmail($ent_email,$msg);
			}
			
			echo "<div align=center><h2>";
			echo $msg;
			echo "<div>";
			die(mysql_error());

	
?>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>