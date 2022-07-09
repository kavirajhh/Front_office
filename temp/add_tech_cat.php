<?php
	include "dbconnection.php";
	include "access.php";
	$pg_v="adct"; // page id
	$cat=$_REQUEST["cat"]; //user cat
	
	
	
	if(!pageaccess($pg_v,$cat))
			{
			
				echo "<h2><div align=\"center\" >Sorry you are not allow to View this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				
			}
			else
			{//go aheid 
			}
	
	
	
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sign Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#9EC0DE">
<form action="tech_cat.php" method="post">
<table width="95%" height="100%" border="1" bgcolor="#E9F0F8" align="center">
  <tr>
    <td colspan="2"><div align="center"><font size="+2">Technology Categories </font></div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFff">
      <div align="center"></div></td>
  </tr>
  <tr>
    <td width="27%" bgcolor="#FFFFff"><strong>Add New Category </strong></td>
    <td width="73%" bgcolor="#FFFFff"><input name="cat" type="text" id="cat"></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFff"><div align="right">
      <input type="submit" name="Submit" value="Add">
      <input type="reset" name="Submit2" value="Reset">
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9F0F8"><strong>Available Categories</strong>      
	<?php
	
	
	////////////////////////////////////////////////////////////////////

		function view_catagory($sql){
	
			$rs=mysql_query($sql) or die(mysql_error());
	
			while($row=mysql_fetch_assoc($rs)){
			echo "<tr>\n";
		
			foreach($row as $value){
				echo "<td bgcolor=\"#FFFFFF\">\n";
				echo $value;
				
				echo "</td></tr>\n";
			
			}
			
		}
	}
///////////////////////////////////////////////////////////////////
	$sql=" SELECT catagory FROM tech_catagory ORDER BY catagory";
	$list=view_catagory($sql);
	
	
	
?></td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
<p align="left">&nbsp;</p>


<p>&nbsp; </p>
</body>
</html>

<html></html>