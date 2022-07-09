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
	$catagory=$_POST["cat"];
	
	
	if($catagory=="")
		{
		echo ("<div align='center'>Enter New Category Name ");
		
		exit();
		}
		
	else{
	$sql2="select catagory from tech_catagory where catagory='".$catagory."'";
	$rs=mysql_query($sql2);
	$row=mysql_fetch_array($rs);
	$u=$row["catagory"];
	
		if($u==$catagory)
			{
				echo ("<div align='center'>Category already in the database ");
				
				exit();
			}
		else{
		
		//insert the values 
			$sql="insert into tech_catagory ( `cat_id` , `catagory` ) 
					values('','".$catagory."')";
			$nra=mysql_query($sql);
			
			if($nra>0)
				{					
					echo("<br>");
					echo("<h2><div align=\"center\">'".$catagory."' is add to databases<br>");
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