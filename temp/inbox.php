<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><body>

<?php

	include "dbconnection.php";
	include "access.php";
	$u_id=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	$swep=$_REQUEST["swep"];
	
	if($swep=="swep")
		{
			$sql=" select *  from message ";
			$list=view_cat($sql);
			}
		

		
?>
<html>
<body>
<table width="100%" border="0" bordercolor="#D9E6F2" align="center">
<form name="form1" method="post" action="inbox.php">
  <tr>
    <td><input name="user" type="hidden" id="user" value=<?php echo $u_id;?>>
		<input name="swep" type="hidden" id="swep" value=<?php echo "swep";?>
		
		
		
		
		
	</td>
    <td><input type="submit" name="Submit" value="Delete"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="62%" colspan="6"> 
 <?php
	$sql="select id,title,date,sender from message where recever in ('".$u_id."','all')";
	$post=view_msg($sql);
	
	
			
?>
      <div align="center"></div></td>
  </tr>
  
  </form><tr><td colspan="6"></td>
  <tr><td colspan="6"></tr>
</table>

</body>
</html>
