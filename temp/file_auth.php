

<?php

	include "dbconnection.php";
	include "access.php";
	$pg_v="flat"; // page id
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	$f_cat=$_REQUEST["f_cat"];
	
	if(!pageaccess($pg_v,$cat))
			{
			
				echo "<h2><div align=\"center\" >Sorry you are not allow to View this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				
			}
			else
			{//go aheid 
			}
	
	
	$temp=$_REQUEST["is_id"];
	if($temp!="")
		{
			$sql1 = "UPDATE up_file SET up_level = 1 WHERE file_id ='".$temp."'";
			$up=mysql_query($sql1) or die(mysql_error());
			
			//send mail to subscribe users
			$sql=" SELECT email FROM ent_info where user_id in 
					(select user_id from ml_subscribe where tech_cat=3 )";
			$rs=mysql_query($sql) or die(mysql_error());
				while($row=mysql_fetch_assoc($rs))
					{
					$email=$row["email"];
					}
			  		$mail=sendmail($email,$msg);
			
			
		}// end of if($temp!="")
	else{
		}
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong> Authorized File To Users </strong></font></div></td>
  </tr>
  <tr>
    <td bgcolor="#000000">
	<form name="form1" method="post" action="file_auth.php">
      <label><strong><font color="#FFFFFF">File Category</font></strong>
        <select name="f_cat" id="f_cat">
          <option value="2">Documents</option>
          <option value="1">Images</option>
          <option value="3">Video's</option>
        </select>
        </label>
      <label>
      <input type="submit" name="Submit" value="Go">
      </label>
      <input name="user" type="hidden" id="user" value=<?php echo $u_id ?>>
	  <input name="cat" type="hidden" id="cat" value="<?php echo $cat ?>">
	</form>    </td>
  </tr>
</table>

<?php 
	
	$sql=" SELECT file_id,file_dis,file_cat,up_date,up_user FROM up_file  where up_level='0' and file_type='".$f_cat."' limit 50";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$id=$row["file_id"];
	$dis=$row["file_dis"];
	$fcat=$row["file_cat"];
	$date=$row["up_date"];
	$user=$row["up_user"];

//echo "<table width=\"100%\" border=\"0\"><tr><td> <div align=\"center\">";
echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
echo "</div></td></tr><tr><td width=\"26%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Update User ID : ".$user." </strong>";
echo "</td><td width=\"35%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
echo "<strong>Catagory : ".$fcat."</strong>";
echo "</td><td width=\"39%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>Update Date : ".$date."</strong>";
echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\"><strong>".$dis."</strong></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
echo "<div align=\"center\">";
echo "<a href=\"".$id."\" target=\"_blank\">".$id."</a></div></td></tr><tr>";
echo "<td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\">";
echo "<a href=\"file_auth.php?user=".$user."&cat=".$cat."&is_id=".$id."\">Publish File</a></td>";
echo "</tr>"; //</table></div></td></tr><tr><td></td></tr></table>";
}
?>
</body>
</html>
