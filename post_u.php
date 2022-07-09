<html><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<body>
<table width="100%" height="50%" border="0">
  <tr bgcolor="#D9E6F2">
    <td height="57">&nbsp;</td>
  </tr>
  <tr>
    <td height="85"> <div align="center">
      <?php

	include "dbconnection.php";
	$id="";
	$title=$_POST["title"];
	$post=$_POST["post"];
	$date=date("Y-n-d H-i-s");
	$sender=$_REQUEST["user"];
	$group=$_POST["checkbox"]; 

	
	if($group==1)
		{
			$res_id='all';
		}
	else
		{
			$res_id=$_POST["res"];
		}
		
		
	if($title=="")
		{
			echo "<h1><div align='center'>You cant send message without Title ";
			exit();
		}
		
$sql="insert into message 
		values('','".$res_id."','".$title."','".$post."','".$date."','".$sender."')";
$nra=mysql_query($sql);
	
	if($nra>0)
		{
			echo("<h2><div align='center'>Message Send to $res_id </h2>");
			echo("</h2>");
		}//end of if($nra>0)

	else
		{	
			echo("<h2>Message send falied</h2>");	
		}
		
		
?>
    </div>    </td>
  </tr>
  <tr bgcolor="#D9E6F2">
    <td height="55">&nbsp;</td>
  </tr>
</table>
</body>
</html>