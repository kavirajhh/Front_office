<html><style type="text/css">
<!--
body {
	background-color: #9EC0DE;
}
-->
</style>
<body>
<table width="100%" height="100%" border="0">
  <tr bgcolor="#E9F0F8">
    <td height="30">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="180"><div align="center">
      <?php
	include "dbconnection.php";
	$u_id=$_POST["log_name"];
	$u_pw=$_POST["pw"];
	$u_re_pw=$_POST["re_pw"];
	$u_cat=4;
	
if($u_id=="")
	{
	echo ("<div align='center'>Enter Valied User Name");
	echo ("<a href='signup.html' target=\"mainFrame\">");
	echo " <br>Back</div>";
	exit();
	}
	
else if($u_pw!=$u_re_pw)
	{
	echo ("<div align='center'>Password confirmation fail");
	echo ("<a href='signup.html' target=\"mainFrame\">");
	echo " <br>Back</div>";
	exit();
	}
	
else{
	$sql2="select u_id from user where u_id='".$u_id."'";
	$rs=mysql_query($sql2);
	$row=mysql_fetch_array($rs);
	$u=$row["u_id"];
	
	if($u==$u_id){
		echo ("<div align='center'>User name already in the database retry with different");
		echo ("<a href='signup.html' target=\"mainFrame\">");
		echo " <br>Back</div>";
		exit();
			}
		else{
		//insert the values 
		$sql="insert into user values('".$u_id."','".md5($u_pw)."','".$u_cat."','')";
		$nra=mysql_query($sql);
			if($nra>0){
			$sql1="select * from user where u_id='".$u_id."'";
			$rs=mysql_query($sql1);
			echo("<h2>");
			while($row=mysql_fetch_array($rs)){
					$id=$row["u_id"];
					$pw=$row["u_pw"];
					$cat=$row["u_cat"];
					
					echo("<br>");
					echo("<h2><div align=\"center\">Your Registration is Success<br>");
					echo ( "your User ID is <strong>$id</strong>  and User catagory $cat<br>");
					
						
				}//end of while

			echo("</h2>");
			}//end of if($nra>0)

			else{	echo("<h2>Registration Fail</h2>");	
					echo ("<a href='signup.html' target=\"mainFrame\">");
					echo " <br>Back</div>";
			}
		}
	}	
?>
    </div></td>
  </tr>
  <tr bgcolor="#E9F0F8">
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>