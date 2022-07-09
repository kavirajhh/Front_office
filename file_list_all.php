

<?php

	include "dbconnection.php";
	include "access.php";
	$pg_v="flat"; // page id
	$f_cat=$_POST["f_cat"];
	$t_cat=$_POST["t_cat"];
	
	?>


<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#000000"><div align="center"><font color="#FFFFFF" size="+2"><strong><font color="#FFFFFF">View Uploaded Files </font>  </strong></font></div></td>
  </tr>
  <tr>
    <td bgcolor="#000000">
	<form name="form1" method="post" action="file_list_all.php">
      <label><strong><font color="#FFFFFF">File Category</font></strong>
        <select name="f_cat" id="f_cat">
          <option value="2">Documents</option>
          <option value="1">Images</option>
          <option value="3">Video's</option>
        </select>
        </label>
      <label>
      <?php
			$sql="SELECT catagory FROM tech_catagory";
			$name='t_cat';
	  		$id=view_id($sql,$name);
	
	?>
      <input type="submit" name="Submit" value="Go">
      </label>
     
	</form>    </td>
  </tr>
</table>

<?php 

	$sql=" SELECT * FROM up_file  where up_level='1' and file_type='".$f_cat."' and file_cat='"
			.$t_cat."' limit 50";
	$rs=mysql_query($sql) or die(mysql_error());

if($f_cat==2)
	{	
	echo "Files in Category '". $t_cat."'";
	while($row=mysql_fetch_assoc($rs))
		{
			$id=$row["file_id"];
			$dis=$row["file_dis"];
			$fcat=$row["file_cat"];
			$date=$row["up_date"];
			$user=$row["up_user"];

		echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
	echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
	echo "</div></td></tr><tr><td width=\"40%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
	echo "<strong><a href=\"".$id."\" target=\"_blank\"> ".$id." </a></strong>";
	echo "</td><td width=\"40%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
	echo "<strong> ".$dis."</strong>";
	echo "</td><td width=\"20%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>".$date."</div></strong>";
	echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
	echo "<div align=\"center\"><strong></strong></div></td></tr>";
		}
	}
	
	
	
else if($f_cat==1)
	{
	echo "Images in Category '". $t_cat."'";
	echo "<table width=\"100%\" border=\"1\">\n";
	
	while($row=mysql_fetch_array($rs))
		{
			$name1=$row['file_id'];
			$dis=$row['file_dis'];
			echo "<tr bgcolor=\"#FFFFFF\">\n<td width=\"40\" align=\"center\">";
			echo "<a href=".$name1.">";
			echo "<img src=".$name1."  align=\"centre\" width=\"30\" height=\"25\" />";
			echo "</td><td>";
			echo $dis;				
			echo "</td></tr>\n";
			
		}
		
		echo "</table>\n";
	}
	
if($f_cat==3)
	{	
	echo "Video's in Category '". $t_cat."'";
	while($row=mysql_fetch_assoc($rs))
		{
			$id=$row["file_id"];
			$dis=$row["file_dis"];
			$fcat=$row["file_cat"];
			$date=$row["up_date"];
			$user=$row["up_user"];

	echo "<table width=\"100%\" border=\"1\" bgcolor=\"#ffffff\">";
	echo "<tr><td colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#D9E6F2\"><div align=\"center\">";
	echo "</div></td></tr><tr><td width=\"40%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
	echo "<strong><a href=\"".$id."\" target=\"_blank\"> ".$id." </a></strong>";
	echo "</td><td width=\"40%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\">";
	echo "<strong> ".$dis."</strong>";
	echo "</td><td width=\"20%\" bordercolor=\"#FFFFFF\" bgcolor=\"#E9F0F8\"><strong>".$date."</div></strong>";
	echo "</td></tr><tr><td colspan=\"3\" bordercolor=\"#E9F0F8\" bgcolor=\"#FFFFFF\">";
	echo "<div align=\"center\"><strong></strong></div></td></tr>";
		}
	}
?>
</body>
</html>
