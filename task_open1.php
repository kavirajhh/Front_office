

<html>
<head><title>PGIS Application</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
.style1 {font-size: 18px}
-->
</style>
<?php
	include "access.php";
	include "dbconnection.php";
	
	?>

</head>
<body>
<form action="task_open.php" method="post" target="_self">
  <div align="left">
    <table width="60%" height="60%" border="1"  align="center" bgcolor="#FFFFFF">	
      <tr>
        <td height="107" colspan="2"><p align="center"><span class="style1">Registration</span></p>
          <p align="center"><span class="style1">&#3517;&#3538;&#3514;&#3535;&#3508;&#3503;&#3538;&#3458;&#3488;&#3538;&#3514;<br>
            </span></p>
        <tr>
          <td width="151" height="26"><strong>NIC </strong>        
          <td width="387" bgcolor="#FFFFFF"><input name="nic" type="text" id="nic" size="12" maxlength="12">        
        <tr>
          <td height="23"><strong>Section</strong> / &#3461;&#3458;&#3521;&#3514;
          <td><?php 
		  	
			$sql="SELECT branch FROM branch";
			$sec='sec';
	  		$id=view_id($sql,$sec);
			?></td>
        <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Next" >
            <input name="reset" type="reset" value="Clear Form">        
        </div>
    </table>
</div>
</form>

</body>
</html>