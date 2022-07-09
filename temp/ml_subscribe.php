<?php 
include "dbconnection.php";
	$u_id=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	
	$pg_v="mlsb"; // page id
	?>
	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Subscribe</title>
</head>

<body>
<div align="center">
  <p><strong>Subscribe &amp; Unsubscribe the mail list </strong></p>
  <p align="left">
  </div>
	<table width="100%">
 <?php
 $sub=$_REQUEST["sub"];
 if($sub!='sub')
 	{
 	echo "<tr><td bgcolor=\"#D9E6F2\"><a href=ml_subscribe.php?sub=sub&user=".$u_id.">
			To unsubscribe click here</a></p></td></tr>";
	echo "<tr><td bgcolor=\"#D9E6F2\">Avilable Mail Group for Subscribe</p></td></tr>";
	}
 else
 	{
	echo "<tr><td bgcolor=\"#D9E6F2\"><a href=ml_subscribe.php?sub=un&user=".$u_id.">
			To Subscribe Click here</a></p></td></tr>";
	echo "<tr><td bgcolor=\"#D9E6F2\">Avilable Mail Group for Unsubscribe</p></td></tr>";
	}
 
 ?>

	<form name="form1" method="post" action="ml_subscribe_up.php">
	<label>
	<?php  
		function view_cat($sql){
			$rs=mysql_query($sql) or die(mysql_error());
				while($row=mysql_fetch_assoc($rs))
					{
					foreach($row as $value)
						{
							$id=$row["cat_id"];
							$cat=$row["catagory"];
						}
						echo "<tr><td bgcolor=\"#FFFFFF\">\n";
						echo "<input type=\"checkbox\" name=".$cat." value=".$id.">".$cat."";
						echo "</td></tr>\n";
					}
				}
		if($sub!='sub')
			{
				$sql=" SELECT * FROM tech_catagory where cat_id not in ( select tech_cat from 
						ml_subscribe where user_id='".$u_id."')";
				$list=view_cat($sql);
			}
		else
			{
				$sql=" SELECT * FROM tech_catagory,ml_subscribe where 
						tech_catagory.cat_id=ml_subscribe.tech_cat and
						user_id='".$u_id."'";
				$list=view_cat($sql);
			}
	
	?>
	</label>
	<td height="33" ><label><div align="center"></div>
	<tr><td><input type="submit" name="Submit" value="Subscribe"></td></tr>
	</label>
	<input name="user" type="hidden" id="user" value=<?php echo $u_id?>>
	<input name="t1" type="hidden" id="t1" value=<?php echo $sub?>>
	</form>
	</table>
 
</body>
</html>
