<?php
include "dbconnection.php";
include "access.php";
$is_id=$_REQUEST["is_id"];

$sql=" SELECT issue_id,issue FROM issues  where issue_id='".$is_id."'";
	$rs=mysql_query($sql) or die(mysql_error());


	while($row=mysql_fetch_assoc($rs)){
	$issue=$row["issue"];
	$issue_id=$row["issue_id"];
	}

?>

<html>
<head><title>PGIS Application</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
-->
</style>
</head>
<body>
<form action="add_solution.php" method="post">
  <div align="left">
    <table width="100%" height="50%" border="1"  align="left" bgcolor="#FFFFFF">	
      <tr>
        <td colspan="4" align="center" valign="middle" bordercolor="#FFFFFF"><h2 align="center">Solution Centre</h2>
      <tr>
        <td width="95" bordercolor="#FFFFFF" bgcolor="#E9F0F8"><div align="left"><strong>User ID</strong></div>
        <td width="311" bordercolor="#FFFFFF" bgcolor="#E9F0F8"><div align="left"><strong><?php //echo $id;?></strong></div>
        <td width="117" bordercolor="#FFFFFF" bgcolor="#E9F0F8"><strong>Issue ID </strong>        
        <td width="183" bordercolor="#FFFFFF" bgcolor="#E9F0F8">
		
		<label>
		<input name="issue_id" type="text" id="issue_id" size="4" value="<?php echo $issue_id;?>">
		</label>        
      <tr>
            <td height="26" colspan="4" bordercolor="#E9F0F8"><div align="center">
              <p><strong>Issue
                </strong>              </p>
              <p>
			  <?php
			  
				echo $issue;
			  
			  ?>
			  </p>
            </div>
        <tr>
          <td colspan="4" bgcolor="#E9F0F8"><label>
            <div align="center"><strong>Youer E-mail Address  </strong>
              <input name="cat" type="text" id="cat">
            </div>
          </label>        
      <tr>
                                  <td colspan="4" bordercolor="#FFFFFF">
                                    <p align="center"><strong>Enter Your Solution Here </strong></p>
          <tr>
            <td colspan="4" bordercolor="#FFFFFF"><div align="center">
              <textarea name="sol" cols="60" rows="5" wrap="off" id="sol"></textarea>
            </div>
      <tr>
        <td>        
        <td colspan="3">        
      <tr>
        <td colspan="4">          <div align="right">
            <input name="submit" type="submit" value="Add Solution" >
            <input name="reset" type="reset" value="Clear Form">        
        </div>
    </table>
</div>
</form>

</body>
</html>