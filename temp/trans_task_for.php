<?php
include "dbconnection.php";
include "access.php";

	$u_id=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	
	$pg_v="tetn"; // page id
		
	
	if(!pageaccess($pg_v,$cat))
			{
			
				echo "<h2><div align=\"center\" >Sorry you are not allow to Add this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				
			}
			else
			{//go aheid 
			}
?>

<html>
<head><title>PGIS Application</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<form action="up_trans_task.php" method="post">
  <div align="left">
    <table width="100%" height="100%" border="1"  align="left" bgcolor="#FFFFFF">	
      <tr>
        <td colspan="2"><h2 align="center">Transaction of Tasks  <strong></strong></h2>
      <tr>
        <td colspan="2"  bgcolor="#C9DBED"><div align="left"><strong>
		Task ID  : <?php echo $_REQUEST["is_id"];?>
	    <input name="task_id" type="hidden" id="task_id" value=<?php echo $_REQUEST["is_id"];?>>
	    <input name="t_id" type="hidden" id="t_id" value=<?php echo $_REQUEST["t_id"];?>>
            
</strong></div>
          <span class="style1">.</span>
      <tr>
            <td width="79" height="26"><strong>Transaction</strong>
            <td width="917" bgcolor="#FFFFFF"><input name="trans" type="text" id="trans" size="45">
      <tr>
                    <td><strong>Description</strong>
                    <td bgcolor="#FFFFFF"><textarea name="dis" cols="45" rows="3" wrap="off" id="dis"></textarea>
      <tr>
                                    <td><strong>Forward to</strong> 
                                    <td bgcolor="#FFFFFF">
			<?php 
			$sql="SELECT u_id FROM user where u_cat<3";
			$name='u';
	  		$id=view_id($sql,$name);
			?>
               <input name="user" type="hidden" id="user" value=<?php echo $u_id ?>>
      <tr>
          <td>        
          <td>        
      <tr>
        <td colspan="2">      
      <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Update" >
            <input name="reset" type="reset" value="Clear Form">        
        </div>
    </table>
</div>
</form>

</body>
</html>