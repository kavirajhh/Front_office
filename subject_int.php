<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
<?php 
	include "access.php";
	include "dbconnection.php";
?>
</head>

<body>
<form id="form1" name="form1" method="post" action="subject_up.php">
<table width="413" height="157" border="1" align="center">
  <tr>
    <td colspan="2" bgcolor="#B1F5EB"><div align="center" class="style1">Add Subject </div></td>
  </tr>
  <tr>
    <td><div align="left">Branch / Officer Name  </div></td>
    <td>
		<?php
		$sql="SELECT branch FROM branch";
				$name='u';
				$id=view_id($sql,$name);
		
		?>
	</td>
  </tr>
  <tr>
    <td>Subject</td>
    <td><label>
      <input name="subject" type="text" id="subject" size="30" maxlength="30" />
      </label></td>
  </tr>
  <tr>
    <td width="153">&nbsp;</td>
    <td width="132"><label>
      
        <div align="right">
          <input type="submit" name="Submit" value="Add Branch / Officer" />
        </div>
    </label></td>
  </tr>
</table>
</form>
</body>
</html>
